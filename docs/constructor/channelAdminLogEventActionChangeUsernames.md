# channelAdminLogEventActionChangeUsernames

**Description** : *The list of usernames associated with the channel was changed*

**Layer** : 218

```tl
channelAdminLogEventActionChangeUsernames#f04fb3a9 prev_value:Vector<string> new_value:Vector<string> = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_value</mark> | [`Vector<string>`](type/string) | Previous set of usernames |
| <mark>new_value</mark> | [`Vector<string>`](type/string) | New set of usernames |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionChangeUsernames(
	prev_value : array('dUgyEN9IJWneBb1m'),
	new_value : array('C3gdENlGIMKozBt8'),
);
```