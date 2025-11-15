# channelAdminLogEventActionExportedInviteRevoke

**Description** : *A specific invite link was revoked*

**Layer** : 218

```tl
channelAdminLogEventActionExportedInviteRevoke#410a134e invite:ExportedChatInvite = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | The invite link that was revoked |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionExportedInviteRevoke(
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'yTOo2bcMW9dNSwzZ',
		admin_id : -3993376978523362548,
		date : 13,
		start_date : 93,
		expire_date : 24,
		usage_limit : 86,
		usage : 19,
		requested : 19,
		subscription_expired : 4,
		title : '5Pk1nxSmAp4uKrNb',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 78,
			amount : -5310013101657747902,
		),
	),
);
```