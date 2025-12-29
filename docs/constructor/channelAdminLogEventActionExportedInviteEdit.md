# channelAdminLogEventActionExportedInviteEdit

**Description** : *A chat invite was edited*

**Layer** : 218

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
		link : 'ORMGdfQVKBcSPpNq',
		admin_id : -2823253949755739559,
		date : 81,
		start_date : 45,
		expire_date : 19,
		usage_limit : 98,
		usage : 73,
		requested : 44,
		subscription_expired : 36,
		title : 'urJBaymkRlGtjdf5',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 41,
			amount : 8305540429871315046,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'Eebzc59AvqdgjpUM',
		admin_id : 3591966592475566393,
		date : 75,
		start_date : 77,
		expire_date : 22,
		usage_limit : 67,
		usage : 65,
		requested : 64,
		subscription_expired : 51,
		title : 'xgoJR75lfSBe6jEH',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 32,
			amount : -3934856597006656168,
		),
	),
);
```