# wallet.tonConnectSessions

**Layer** : 233

```tl
wallet.tonConnectSessions#e1f6896 sessions:Vector<TonConnectSession> = wallet.TonConnectSessions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>sessions</mark> | [`Vector<TonConnectSession>`](type/TonConnectSession) | NOTHING |

---

## Type

[wallet.TonConnectSessions](type/wallet.TonConnectSessions)

---

## Example

```php
$walletTonConnectSessions = $client->wallet->tonConnectSessions(
	sessions : array(
		$client->tonConnectSession(
			pending : true,
			closing : true,
			closed : true,
			id : -6676074795901479781,
			dapp_client_id : 'iz0oaQ3EA2cp9SYW',
			client_id : 'mWziR6ZSbyBJ1X3P',
			nonce : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			manifest : $client->tonConnectManifest(
				url : 'https://docs.liveproto.dev',
				name : 'nj0DMcBLWgTA7PQr',
				icon : $client->webDocument(
					url : 'https://docs.liveproto.dev',
					access_hash : 9148963617494937536,
					size : 8,
					mime_type : 'Hv6lNTDwYUJrbgKZ',
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
			manifest_error : 40,
			date : 91,
		),
	),
);
```