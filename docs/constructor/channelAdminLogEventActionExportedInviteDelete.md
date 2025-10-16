# channelAdminLogEventActionExportedInviteDelete

**Description** : *A chat invite was deleted*

**Layer** : 216

```tl
channelAdminLogEventActionExportedInviteDelete#5a50fca4 invite:ExportedChatInvite = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | The deleted chat invite |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionExportedInviteDelete(
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : '0NxTXfQUr3miRPcd',
		admin_id : 3675273249995549127,
		date : 33,
		start_date : 3,
		expire_date : 61,
		usage_limit : 27,
		usage : 62,
		requested : 97,
		subscription_expired : 93,
		title : 'TvYmc23jkhzflnrO',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 25,
			amount : -2515999315326643706,
		),
	),
);
```