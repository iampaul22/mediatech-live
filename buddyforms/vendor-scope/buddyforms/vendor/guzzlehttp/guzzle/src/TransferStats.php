<?php
 namespace tk\GuzzleHttp; use tk\Psr\Http\Message\RequestInterface; use tk\Psr\Http\Message\ResponseInterface; use tk\Psr\Http\Message\UriInterface; final class TransferStats { private $request; private $response; private $transferTime; private $handlerStats; private $handlerErrorData; public function __construct(\tk\Psr\Http\Message\RequestInterface $request, ?\tk\Psr\Http\Message\ResponseInterface $response = null, ?float $transferTime = null, $handlerErrorData = null, array $handlerStats = []) { $this->request = $request; $this->response = $response; $this->transferTime = $transferTime; $this->handlerErrorData = $handlerErrorData; $this->handlerStats = $handlerStats; } public function getRequest() : \tk\Psr\Http\Message\RequestInterface { return $this->request; } public function getResponse() : ?\tk\Psr\Http\Message\ResponseInterface { return $this->response; } public function hasResponse() : bool { return $this->response !== null; } public function getHandlerErrorData() { return $this->handlerErrorData; } public function getEffectiveUri() : \tk\Psr\Http\Message\UriInterface { return $this->request->getUri(); } public function getTransferTime() : ?float { return $this->transferTime; } public function getHandlerStats() : array { return $this->handlerStats; } public function getHandlerStat(string $stat) { return isset($this->handlerStats[$stat]) ? $this->handlerStats[$stat] : null; } } 