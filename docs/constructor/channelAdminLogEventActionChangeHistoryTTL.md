# channelAdminLogEventActionChangeHistoryTTL

**Description** : *The Time\-To\-Live of messages in this chat was changed*

**Layer** : 218

```tl
channelAdminLogEventActionChangeHistoryTTL#6e941a38 prev_value:int new_value:int = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_value</mark> | [`int`](type/int) | Previous value |
| <mark>new_value</mark> | [`int`](type/int) | New value |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionChangeHistoryTTL(
	prev_value : 86,
	new_value : 48,
);
```