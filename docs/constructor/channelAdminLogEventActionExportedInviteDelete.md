# channelAdminLogEventActionExportedInviteDelete

**Description** : *A chat invite was deleted*

**Layer** : 225

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
		link : 'RjzVa0oELWU7HBb3',
		admin_id : -5009296066517717845,
		date : 97,
		start_date : 66,
		expire_date : 85,
		usage_limit : 35,
		usage : 13,
		requested : 93,
		subscription_expired : 94,
		title : 'kDeNaH3VUuwlt0z2',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 10,
			amount : 4594897122281444796,
		),
	),
);
```