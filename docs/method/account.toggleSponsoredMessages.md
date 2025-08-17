# account.toggleSponsoredMessages

**Description** : *Disable or re-enable Telegram ads for the current Premium account*

**Layer** : 211

```tl
account.toggleSponsoredMessages#b9d9a38d enabled:Bool = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>enabled</mark> | [`Bool`](type/Bool) | Enable or disable ads |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->account->toggleSponsoredMessages(
	enabled : $client->boolFalse(),
);
```