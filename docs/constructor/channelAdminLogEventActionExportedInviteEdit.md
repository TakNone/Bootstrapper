# channelAdminLogEventActionExportedInviteEdit

**Description** : *A chat invite was edited*

**Layer** : 214

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
		link : 'rOBxRaVDnXNlJboF',
		admin_id : 1634621871475449664,
		date : 3,
		start_date : 23,
		expire_date : 76,
		usage_limit : 10,
		usage : 29,
		requested : 54,
		subscription_expired : 86,
		title : 'WyihI4LC8p2MZDAu',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 79,
			amount : -1975296929204354774,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'fVnOXTCyw15iWcLb',
		admin_id : 3891109959678974158,
		date : 28,
		start_date : 0,
		expire_date : 13,
		usage_limit : 8,
		usage : 58,
		requested : 10,
		subscription_expired : 84,
		title : 's4FBdjvPJfCracHG',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 54,
			amount : -6265231522074863747,
		),
	),
);
```