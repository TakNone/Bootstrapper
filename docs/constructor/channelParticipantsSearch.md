# channelParticipantsSearch

**Description** : *Query participants by name*

**Layer** : 214

```tl
channelParticipantsSearch#656ac4b q:string = ChannelParticipantsFilter;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>q</mark> | [`string`](type/string) | Search query |

---

## Type

[ChannelParticipantsFilter](type/ChannelParticipantsFilter)

---

## Example

```php
$channelParticipantsFilter = $client->channelParticipantsSearch(
	q : '1yhN39R8Op45ILAx',
);
```