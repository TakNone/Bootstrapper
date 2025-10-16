# groupCallParticipantVideoSourceGroup

**Description** : *Describes a group of video synchronization source identifiers*

**Layer** : 216

```tl
groupCallParticipantVideoSourceGroup#dcb118b7 semantics:string sources:Vector<int> = GroupCallParticipantVideoSourceGroup;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>semantics</mark> | [`string`](type/string) | SDP semantics |
| <mark>sources</mark> | [`Vector<int>`](type/int) | Source IDs |

---

## Type

[GroupCallParticipantVideoSourceGroup](type/GroupCallParticipantVideoSourceGroup)

---

## Example

```php
$groupCallParticipantVideoSourceGroup = $client->groupCallParticipantVideoSourceGroup(
	semantics : 'ZDLcAtNRawhurj8B',
	sources : array(16),
);
```