# updateWalletTonConnectSession

**Layer** : 233

```tl
updateWalletTonConnectSession#50a38e0e session:TonConnectSession = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>session</mark> | [`TonConnectSession`](type/TonConnectSession) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateWalletTonConnectSession(
	session : $client->tonConnectSession(
		pending : true,
		closing : true,
		closed : true,
		id : -4948042577303704248,
		dapp_client_id : 'TgCMpNmvQt8YAHl7',
		client_id : 'nuyxlM2pLP9ZDGO1',
		nonce : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		manifest : $client->tonConnectManifest(
			url : 'https://docs.liveproto.dev',
			name : '0xIGCQpyLeAER7lT',
			icon : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -5639514960175602748,
				size : 81,
				mime_type : '960BmzUycWfRdxFp',
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
		manifest_error : 10,
		date : 66,
	),
);
```