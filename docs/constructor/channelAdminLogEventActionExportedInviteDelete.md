# channelAdminLogEventActionExportedInviteDelete

**Description** : *A chat invite was deleted*

**Layer** : 227

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
		link : 'h51JTsUkrQedYN4Z',
		admin_id : -2518519844231470149,
		date : 39,
		start_date : 82,
		expire_date : 72,
		usage_limit : 74,
		usage : 74,
		requested : 47,
		subscription_expired : 55,
		title : 'sFZT0mYwSDjQ3vb1',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 5,
			amount : -3247661651175546674,
		),
	),
);
```