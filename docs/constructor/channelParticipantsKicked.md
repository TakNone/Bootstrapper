# channelParticipantsKicked

**Description** : *Fetch only kicked participants*

**Layer** : 214

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
	q : '6hWHvayw1RSpDlVx',
);
```