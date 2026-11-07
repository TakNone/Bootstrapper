# wallet.tonConnectCreateSession

**Layer** : 233

```tl
wallet.tonConnectCreateSession#cc931046 dapp_client_id:string manifest_url:string = TonConnectSession;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>dapp_client_id</mark> | [`string`](type/string) | NOTHING |
| <mark>manifest_url</mark> | [`string`](type/string) | NOTHING |

---

## Result

[TonConnectSession](type/TonConnectSession)

---

## Example

```php
$tonConnectSession = $client->wallet->tonConnectCreateSession(
	dapp_client_id : 'pkoaQ5RzgX6iWutU',
	manifest_url : 'https://docs.liveproto.dev',
);
```