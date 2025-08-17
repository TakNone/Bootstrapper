# requestPeerTypeUser

**Description** : *Choose a user*

**Layer** : 211

```tl
requestPeerTypeUser#5f3b8a00 flags:# bot:flags.0?Bool premium:flags.1?Bool = RequestPeerType;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **bot** | [`flags.0?Bool`](type/Bool) | Whether to allow choosing only bots |
| **premium** | [`flags.1?Bool`](type/Bool) | Whether to allow choosing only Premium users |

---

## Type

[RequestPeerType](type/RequestPeerType)

---

## Example

```php
$requestPeerType = $client->requestPeerTypeUser(
	bot : $client->boolFalse(),
	premium : $client->boolFalse(),
);
```