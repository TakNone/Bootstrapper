# phone.joinGroupCall

**Description** : *Join a group call*

**Layer** : 216

```tl
phone.joinGroupCall#8fb53057 flags:# muted:flags.0?true video_stopped:flags.2?true call:InputGroupCall join_as:InputPeer invite_hash:flags.1?string public_key:flags.3?int256 block:flags.3?bytes params:DataJSON = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **muted** | [`flags.0?true`](type/true) | If set, the user will be muted by default upon joining |
| **video_stopped** | [`flags.2?true`](type/true) | If set, the user's video will be disabled by default upon joining |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | The group call |
| <mark>join_as</mark> | [`InputPeer`](type/InputPeer) | Join the group call, presenting yourself as the specified user/channel |
| **invite_hash** | [`flags.1?string`](type/string) | The invitation hash from the invite link », if provided allows speaking in a livestream or muted group chat |
| **public_key** | [`flags.3?int256`](type/int256) | NOTHING |
| **block** | [`flags.3?bytes`](type/bytes) | NOTHING |
| <mark>params</mark> | [`DataJSON`](type/DataJSON) | WebRTC parameters |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **DATA_JSON_INVALID** | `400` | The provided JSON data is invalid |
| **GROUPCALL_FORBIDDEN** | `403` | The group call has already ended |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |
| **GROUPCALL_SSRC_DUPLICATE_MUCH** | `400` | The app needs to retry joining the group call with a new SSRC value |
| **JOIN_AS_PEER_INVALID** | `400` | The specified peer cannot be used to join a group call |

---

## Example

```php
$updates = $client->phone->joinGroupCall(
	muted : true,
	video_stopped : true,
	call : $client->inputGroupCall(
		id : 3034411932869041908,
		access_hash : 1504402296319494058,
	),
	join_as : $client->inputPeerEmpty(),
	invite_hash : 'i9xdoRDJk370w8hN',
	public_key : '25297565471840276414600879351169595826678457695705754131486008132855712727787',
	block : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	params : $client->dataJSON(
		data : 'ewDua7HPlI4Av3M5',
	),
);
```