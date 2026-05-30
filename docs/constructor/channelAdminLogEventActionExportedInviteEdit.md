# channelAdminLogEventActionExportedInviteEdit

**Description** : *A chat invite was edited*

**Layer** : 222

```tl
channelAdminLogEventActionExportedInviteEdit#e90ebb59 prev_invite:ExportedChatInvite new_invite:ExportedChatInvite = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | Previous chat invite information |
| <mark>new_invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | New chat invite information |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionExportedInviteEdit(
	prev_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'NPur7QI9XbexJVjf',
		admin_id : 607904323076357024,
		date : 32,
		start_date : 51,
		expire_date : 84,
		usage_limit : 73,
		usage : 92,
		requested : 16,
		subscription_expired : 100,
		title : 'oOeR1pyImJkY9Tqs',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 70,
			amount : 7224133369458065392,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'HtqSn2YRohGz1DQW',
		admin_id : 2856723895308302197,
		date : 11,
		start_date : 34,
		expire_date : 32,
		usage_limit : 8,
		usage : 84,
		requested : 78,
		subscription_expired : 76,
		title : 'bf2MExwRmanuHOTP',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 36,
			amount : 7565485625812380588,
		),
	),
);
```