# communities.toggleCommunityCollapsedInDialogs

**Layer** : 233

```tl
communities.toggleCommunityCollapsedInDialogs#d766e3ea flags:# collapsed:flags.0?true community:InputChannel = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **collapsed** | [`flags.0?true`](type/true) | NOTHING |
| <mark>community</mark> | [`InputChannel`](type/InputChannel) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->communities->toggleCommunityCollapsedInDialogs(
	collapsed : true,
	community : $client->get_input_channel(channel : '@LiveProto'),
);
```