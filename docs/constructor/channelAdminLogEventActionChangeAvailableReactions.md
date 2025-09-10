# channelAdminLogEventActionChangeAvailableReactions

**Description** : *The set of allowed message reactions &raquo; for this channel has changed*

**Layer** : 214

```tl
channelAdminLogEventActionChangeAvailableReactions#be4e0ef8 prev_value:ChatReactions new_value:ChatReactions = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_value</mark> | [`ChatReactions`](type/ChatReactions) | Previously allowed reaction emojis |
| <mark>new_value</mark> | [`ChatReactions`](type/ChatReactions) | New allowed reaction emojis |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionChangeAvailableReactions(
	prev_value : $client->chatReactionsNone(),
	new_value : $client->chatReactionsNone(),
);
```