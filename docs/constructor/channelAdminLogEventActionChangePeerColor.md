# channelAdminLogEventActionChangePeerColor

**Description** : *The message accent color was changed*

**Layer** : 222

```tl
channelAdminLogEventActionChangePeerColor#5796e780 prev_value:PeerColor new_value:PeerColor = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_value</mark> | [`PeerColor`](type/PeerColor) | Previous accent palette |
| <mark>new_value</mark> | [`PeerColor`](type/PeerColor) | New accent palette |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionChangePeerColor(
	prev_value : $client->peerColor(
		color : 72,
		background_emoji_id : -9011131542519694336,
	),
	new_value : $client->peerColor(
		color : 6,
		background_emoji_id : 5937606477726248196,
	),
);
```