# channels.setMainProfileTab

**Layer** : 216

```tl
channels.setMainProfileTab#3583fcb1 channel:InputChannel tab:ProfileTab = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | NOTHING |
| <mark>tab</mark> | [`ProfileTab`](type/ProfileTab) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->channels->setMainProfileTab(
	channel : $client->inputChannelEmpty(),
	tab : $client->profileTabPosts(),
);
```