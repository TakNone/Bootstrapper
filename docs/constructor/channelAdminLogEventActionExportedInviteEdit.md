# channelAdminLogEventActionExportedInviteEdit

**Description** : *A chat invite was edited*

**Layer** : 216

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
		link : '6Tpr87fXv3bH04QN',
		admin_id : 6456569846933060098,
		date : 12,
		start_date : 68,
		expire_date : 12,
		usage_limit : 13,
		usage : 44,
		requested : 83,
		subscription_expired : 50,
		title : 'wxmPnBpi1shdofbL',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 41,
			amount : -7035943533725753970,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : '1vpaHbKqOuSzRglZ',
		admin_id : -7601385535296864901,
		date : 77,
		start_date : 28,
		expire_date : 0,
		usage_limit : 78,
		usage : 3,
		requested : 44,
		subscription_expired : 74,
		title : 'c2PBtKjeA6NivHf0',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 35,
			amount : 8917276706865865396,
		),
	),
);
```