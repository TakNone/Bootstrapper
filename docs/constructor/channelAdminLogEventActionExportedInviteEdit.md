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
		link : 'Fi94Y1mZVHCIKRec',
		admin_id : -3820748422498812749,
		date : 41,
		start_date : 19,
		expire_date : 92,
		usage_limit : 93,
		usage : 47,
		requested : 29,
		subscription_expired : 73,
		title : 'jTtuaBkxAXhfVK2l',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 42,
			amount : 4803850134505755116,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'IXc1mWVYrAJG40tH',
		admin_id : -2344647767085425677,
		date : 15,
		start_date : 63,
		expire_date : 10,
		usage_limit : 11,
		usage : 56,
		requested : 3,
		subscription_expired : 87,
		title : 'PR4Llz6pukf8q5Ti',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 32,
			amount : -3217621063348855033,
		),
	),
);
```