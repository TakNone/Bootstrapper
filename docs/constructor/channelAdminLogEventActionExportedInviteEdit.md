# channelAdminLogEventActionExportedInviteEdit

**Description** : *A chat invite was edited*

**Layer** : 229

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
		link : 'EyiHK5YUPjnae4uX',
		admin_id : 5336067980607699556,
		date : 72,
		start_date : 78,
		expire_date : 77,
		usage_limit : 95,
		usage : 16,
		requested : 63,
		subscription_expired : 62,
		title : 'I0QxlRKwMuTOrNta',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 72,
			amount : 3987920460630481783,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'wy1FCEBTuqYXM6Ws',
		admin_id : 5982710145669387225,
		date : 93,
		start_date : 25,
		expire_date : 48,
		usage_limit : 68,
		usage : 6,
		requested : 64,
		subscription_expired : 3,
		title : 'ArxHGYzT0Z64Ss8R',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 73,
			amount : -190691702707322860,
		),
	),
);
```