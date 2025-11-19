# channelAdminLogEventActionTogglePreHistoryHidden

**Description** : *The hidden prehistory setting was changed*

**Layer** : 218

```tl
channelAdminLogEventActionTogglePreHistoryHidden#5f5c95f1 new_value:Bool = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>new_value</mark> | [`Bool`](type/Bool) | New value |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionTogglePreHistoryHidden(
	new_value : false,
);
```