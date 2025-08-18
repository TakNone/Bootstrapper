# phone.joinGroupCall

**Description** : *Join a group call*

**Layer** : 211

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
		id : -1670863853090994284,
		access_hash : -4152943254343140471,
	),
	join_as : $client->inputPeerEmpty(),
	invite_hash : 'nrq6M2ldSCvgRTY8',
	public_key : '9607630117569972422645536913768423376609732646807002556745967344133525012371',
	block : '=?L?;LiveProtom?B??',
	params : $client->dataJSON(
		data : 'LMir7JAeZ3FVSumn',
	),
);
```