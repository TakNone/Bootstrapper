# channelParticipantsBanned

**Description** : *Fetch only banned participants*

**Layer** : 216

```tl
channelParticipantsBanned#1427a5e1 q:string = ChannelParticipantsFilter;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>q</mark> | [`string`](type/string) | Optional filter for searching banned participants by name (otherwise empty) |

---

## Type

[ChannelParticipantsFilter](type/ChannelParticipantsFilter)

---

## Example

```php
$channelParticipantsFilter = $client->channelParticipantsBanned(
	q : 'sTLv1cGEkYbIf2Fi',
);
```