# channelAdminLogEventActionParticipantLeave

**Description** : *A user left the channel/supergroup (in the case of big groups, info of the user that has joined isn't shown)*

**Layer** : 211

```tl
channelAdminLogEventActionParticipantLeave#f89777f2 = ChannelAdminLogEventAction;
```

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionParticipantLeave();
```