# channelAdminLogEventActionChangeBackgroundEmoji

**Description** : *The custom emoji used to generate the pattern of the background profile color &raquo; of a channel was changed*

**Layer** : 214

```tl
channelAdminLogEventActionChangeBackgroundEmoji#445fc434 prev_value:long new_value:long = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_value</mark> | [`long`](type/long) | Old custom emoji ID (or 0 if none) |
| <mark>new_value</mark> | [`long`](type/long) | New custom emoji ID (or 0 if none) |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionChangeBackgroundEmoji(
	prev_value : -909962943331859433,
	new_value : 3704095689414419443,
);
```