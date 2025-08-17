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
		link : 'lSogU5LpyqdJIatn',
		admin_id : 2491198103027701628,
		date : 97,
		start_date : 57,
		expire_date : 70,
		usage_limit : 58,
		usage : 99,
		requested : 47,
		subscription_expired : 38,
		title : 'eG5K0iC9xtf1DVbR',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 85,
			amount : -4368019242832013877,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'a3KZc2O9QTUygv65',
		admin_id : -2162517139536289037,
		date : 61,
		start_date : 49,
		expire_date : 43,
		usage_limit : 6,
		usage : 14,
		requested : 92,
		subscription_expired : 26,
		title : '9kUKnlB3Hz4T75GR',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 83,
			amount : 2861407897920186327,
		),
	),
);
```