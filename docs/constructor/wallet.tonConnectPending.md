# wallet.tonConnectPending

**Layer** : 233

```tl
wallet.tonConnectPending#85c0f124 session:TonConnectSession requests:Vector<TonConnectRequest> = wallet.TonConnectPending;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>session</mark> | [`TonConnectSession`](type/TonConnectSession) | NOTHING |
| <mark>requests</mark> | [`Vector<TonConnectRequest>`](type/TonConnectRequest) | NOTHING |

---

## Type

[wallet.TonConnectPending](type/wallet.TonConnectPending)

---

## Example

```php
$walletTonConnectPending = $client->wallet->tonConnectPending(
	session : $client->tonConnectSession(
		pending : true,
		closing : true,
		closed : true,
		id : -4238853018865276451,
		dapp_client_id : '1Nu6ejPqr8lJziaY',
		client_id : 'dI7huiRYnV6FfDsx',
		nonce : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		manifest : $client->tonConnectManifest(
			url : 'https://docs.liveproto.dev',
			name : '0x3khZFEzLd2ocjW',
			icon : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : 6818558708491229838,
				size : 48,
				mime_type : 'PgsJC3TYKmOtoGNS',
				attributes : array(
					$client->documentAttributeImageSize(...),
					$client->documentAttributeAnimated(...),
					$client->documentAttributeSticker(...),
					$client->documentAttributeVideo(...),
					$client->documentAttributeAudio(...),
					$client->documentAttributeFilename(...),
					$client->documentAttributeHasStickers(...),
					$client->documentAttributeCustomEmoji(...),
				),
			),
		),
		manifest_error : 24,
		date : 84,
	),
	requests : array(
		$client->tonConnectRequest(
			session_id : 5791985927033837796,
			msg_id : 12,
			body : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			expires : 34,
			topic : 'vHLaxS0RWzCyKb4N',
			trace_id : '7nzvZasiIKuXQT5c',
		),
	),
);
```