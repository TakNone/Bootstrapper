# channelAdminLogEventActionExportedInviteEdit

**Description** : *A chat invite was edited*

**Layer** : 225

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
		link : 'y37QmilqzdCZKGES',
		admin_id : 4277267438278291543,
		date : 85,
		start_date : 48,
		expire_date : 40,
		usage_limit : 75,
		usage : 83,
		requested : 3,
		subscription_expired : 72,
		title : 'nqJYT8Hg3KGMrbX1',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 71,
			amount : 6843656527971724663,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'GkjIVtSq48eyYsJA',
		admin_id : -551934340221703123,
		date : 60,
		start_date : 2,
		expire_date : 75,
		usage_limit : 44,
		usage : 73,
		requested : 8,
		subscription_expired : 71,
		title : 'aNk7eL0migTUdn24',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 29,
			amount : 8257175404711778991,
		),
	),
);
```