# channelParticipantsSearch

**Description** : *Query participants by name*

**Layer** : 218

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
	q : 'lHoEaz3dX1nmZ5Dt',
);
```