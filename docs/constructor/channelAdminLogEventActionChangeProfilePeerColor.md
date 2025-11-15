# channelAdminLogEventActionChangeProfilePeerColor

**Description** : *The profile accent color was changed*

**Layer** : 218

```tl
channelAdminLogEventActionChangeProfilePeerColor#5e477b25 prev_value:PeerColor new_value:PeerColor = ChannelAdminLogEventAction;
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
$channelAdminLogEventAction = $client->channelAdminLogEventActionChangeProfilePeerColor(
	prev_value : $client->peerColor(
		color : 10,
		background_emoji_id : -7076408620801565685,
	),
	new_value : $client->peerColor(
		color : 96,
		background_emoji_id : 7498011473061773600,
	),
);
```