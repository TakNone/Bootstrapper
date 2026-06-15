# channelAdminLogEventActionExportedInviteRevoke

**Description** : *A specific invite link was revoked*

**Layer** : 227

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
		link : 'rlRiWbUvAmzuGpjE',
		admin_id : 9130202279076029718,
		date : 68,
		start_date : 85,
		expire_date : 25,
		usage_limit : 39,
		usage : 43,
		requested : 14,
		subscription_expired : 98,
		title : '0DhbqzEvUTltpAya',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 42,
			amount : 8182585086866761457,
		),
	),
);
```