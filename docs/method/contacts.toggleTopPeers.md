# contacts.toggleTopPeers

**Description** : *Enable/disable top peers*

**Layer** : 211

```tl
contacts.toggleTopPeers#8514bdda enabled:Bool = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>enabled</mark> | [`Bool`](type/Bool) | Enable/disable |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->contacts->toggleTopPeers(
	enabled : $client->boolFalse(),
);
```