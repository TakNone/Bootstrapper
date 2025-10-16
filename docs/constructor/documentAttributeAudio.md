# documentAttributeAudio

**Description** : *Represents an audio file*

**Layer** : 216

```tl
documentAttributeAudio#9852f9c6 flags:# voice:flags.10?true duration:int title:flags.0?string performer:flags.1?string waveform:flags.2?bytes = DocumentAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **voice** | [`flags.10?true`](type/true) | Whether this is a voice message |
| <mark>duration</mark> | [`int`](type/int) | Duration in seconds |
| **title** | [`flags.0?string`](type/string) | Name of song |
| **performer** | [`flags.1?string`](type/string) | Performer |
| **waveform** | [`flags.2?bytes`](type/bytes) | Waveform: consists in a series of bitpacked 5-bit values. Example implementation: android |

---

## Type

[DocumentAttribute](type/DocumentAttribute)

---

## Example

```php
$documentAttribute = $client->documentAttributeAudio(
	voice : true,
	duration : 15,
	title : '3TDnZdQ5YmU8hEoL',
	performer : 'Lehc1QrqNO5nymkX',
	waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```