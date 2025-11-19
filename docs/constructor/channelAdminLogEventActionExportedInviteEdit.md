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
		link : 'sVlDUjzC7685IKFg',
		admin_id : -7154359233335143627,
		date : 39,
		start_date : 17,
		expire_date : 90,
		usage_limit : 11,
		usage : 47,
		requested : 32,
		subscription_expired : 57,
		title : 'blv67SFcQhNLkG09',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 11,
			amount : 5591501462481787738,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : '3T6E5CS9fAwDtR7k',
		admin_id : 2503553757605677129,
		date : 66,
		start_date : 34,
		expire_date : 11,
		usage_limit : 98,
		usage : 83,
		requested : 67,
		subscription_expired : 64,
		title : 'jvAIh47XJp2obWlD',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 40,
			amount : -3880284310281129813,
		),
	),
);
```