# account.setMainProfileTab

**Description** : *Changes the main profile tab of the current user, see here &raquo; for more info*

**Layer** : 216

```tl
account.setMainProfileTab#5dee78b0 tab:ProfileTab = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>tab</mark> | [`ProfileTab`](type/ProfileTab) | The tab to set as main tab |

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