# channelParticipantsKicked

**Description** : *Fetch only kicked participants*

**Layer** : 218

```tl
channelParticipantsKicked#a3b54985 q:string = ChannelParticipantsFilter;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>q</mark> | [`string`](type/string) | Optional filter for searching kicked participants by name (otherwise empty) |

---

## Type

[ChannelParticipantsFilter](type/ChannelParticipantsFilter)

---

## Example

```php
$channelParticipantsFilter = $client->channelParticipantsKicked(
	q : 'Wi2NHMkO5GvR1f9z',
);
```