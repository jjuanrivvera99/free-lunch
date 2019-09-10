'use strict';

var app = require('express')();
var server = require('http').Server(app);
var io = require('socket.io')(server);

require('dotenv').config();

var redisPort = process.env.REDIS_PORT;
var redisHost = process.env.REDIS_HOST;

var ioRedis = require('ioredis');
var redis = new ioRedis(redisPort, redisHost);

redis.subscribe(['test-channel-one', 'test-channel-two']);

redis.on('message', function (channel, message) {
    message  = JSON.parse(message);
    io.emit(channel + ':' + message.event, message.data);
});

var broadcastPort = process.env.BROADCAST_PORT;

server.listen(broadcastPort, function () {
    console.log('Socket server is running.');
});