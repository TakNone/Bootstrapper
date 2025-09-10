# inputPeerUser

**Description** : *Defines a user for further interaction*

**Layer** : 214

```tl
inputPeerUser#dde8a54c user_id:long access_hash:long = InputPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | User identifier |
| <mark>access_hash</mark> | [`long`](type/long) | access_hash value from the user constructor |

---

## Type

[InputPeer](type/InputPeer)

---

## Example

```php
$inputPeer = $client->inputPeerUser(
	user_id : 6181213340423065253,
	access_hash : 6322898713527423339,
);
```