# requestPeerTypeCreateBot

**Description** : *Used in a keyboardButtonRequestPeer by a manager bot to ask a user to create a new managed bot &raquo;, see here &raquo; for more info*

**Layer** : 233

```tl
requestPeerTypeCreateBot#3e81e078 flags:# bot_managed:flags.0?true suggested_name:flags.1?string suggested_username:flags.2?string = RequestPeerType;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **bot_managed** | [`flags.0?true`](type/true) | If set, requests to create a managed bot; must always be set |
| **suggested_name** | [`flags.1?string`](type/string) | If set, the name to pre-fill in the managed bot creation flow |
| **suggested_username** | [`flags.2?string`](type/string) | If set, the username to pre-fill in the managed bot creation flow |

---

## Type

[RequestPeerType](type/RequestPeerType)

---

## Example

```php
$requestPeerType = $client->requestPeerTypeCreateBot(
	bot_managed : true,
	suggested_name : 'JOpIGsrxhMZd1nt2',
	suggested_username : 'TakNone',
);
```