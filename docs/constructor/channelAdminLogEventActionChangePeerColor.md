# channelAdminLogEventActionChangePeerColor

**Description** : *The message accent color was changed*

**Layer** : 216

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
		color : 36,
		background_emoji_id : -551267568880465110,
	),
	new_value : $client->peerColor(
		color : 74,
		background_emoji_id : -730742479917589390,
	),
);
```