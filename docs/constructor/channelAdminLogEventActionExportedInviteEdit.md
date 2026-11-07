# channelAdminLogEventActionExportedInviteEdit

**Description** : *A chat invite was edited*

**Layer** : 233

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
		link : 'Yyr8zoQiOSV3hwIH',
		admin_id : -5816205889805871860,
		date : 50,
		start_date : 90,
		expire_date : 10,
		usage_limit : 7,
		usage : 36,
		requested : 24,
		subscription_expired : 81,
		title : 'E6WlQwX5Kc9dGqI3',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 44,
			amount : -51036565110917682,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'IypMrVKBAgoftcn0',
		admin_id : -7131946093737940856,
		date : 82,
		start_date : 56,
		expire_date : 60,
		usage_limit : 98,
		usage : 13,
		requested : 13,
		subscription_expired : 49,
		title : 'UurzSgJNk6aFH1XM',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 23,
			amount : -3896808105499138682,
		),
	),
);
```