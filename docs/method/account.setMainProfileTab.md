# account.setMainProfileTab

**Layer** : 214

```tl
account.setMainProfileTab#5dee78b0 tab:ProfileTab = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>tab</mark> | [`ProfileTab`](type/ProfileTab) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->account->setMainProfileTab(
	tab : $client->profileTabPosts(),
);
```