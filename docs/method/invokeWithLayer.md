# invokeWithLayer

**Description** : *Invoke the specified query using the specified API layer*

**Layer** : 211

```tl
invokeWithLayer#da9b0d0d {X:Type} layer:int query:!X = X;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>layer</mark> | [`int`](type/int) | The layer to use |
| <mark>query</mark> | [`!X`](type/X) | The query |

---

## Result

[X](type/X)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **AUTH_BYTES_INVALID** | `400` | The provided authorization is invalid |
| **CDN_METHOD_INVALID** | `400` | You can't call this method in a CDN DC |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **CONNECTION_API_ID_INVALID** | `400` | The provided API id is invalid |
| **INVITE_HASH_EXPIRED** | `406` | The invite link has expired |

---

## Example

```php
$x = $client->invokeWithLayer(
	layer : 66,
	query : $client->help->getConfig(raw : true),
);
```