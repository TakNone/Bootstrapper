# channelAdminLogEventActionExportedInviteEdit

**Description** : *A chat invite was edited*

**Layer** : 211

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
		link : 'fM0Y1lz89raGZhvR',
		admin_id : -7347626405812606175,
		date : 51,
		start_date : 72,
		expire_date : 16,
		usage_limit : 94,
		usage : 10,
		requested : 34,
		subscription_expired : 34,
		title : 'LFUn62D1KI9sVypW',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 50,
			amount : 7123655527666034453,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'HJk0eOSxcDZTgNVE',
		admin_id : 265211812222787264,
		date : 10,
		start_date : 71,
		expire_date : 81,
		usage_limit : 82,
		usage : 36,
		requested : 2,
		subscription_expired : 9,
		title : 'hFLzcDPUY534j7I2',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 0,
			amount : 4643689771841227368,
		),
	),
);
```