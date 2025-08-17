# inputCollectibleUsername

**Description** : *Represents a username fragment collectible*

**Layer** : 211

```tl
inputCollectibleUsername#e39460a9 username:string = InputCollectible;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>username</mark> | [`string`](type/string) | Username |

---

## Type

[InputCollectible](type/InputCollectible)

---

## Example

```php
$inputCollectible = $client->inputCollectibleUsername(
	username : 'TakNone',
);
```