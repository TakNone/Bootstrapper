# config

**Description** : *Current configuration*

**Layer** : 211

```tl
config#cc1a241e flags:# default_p2p_contacts:flags.3?true preload_featured_stickers:flags.4?true revoke_pm_inbox:flags.6?true blocked_mode:flags.8?true force_try_ipv6:flags.14?true date:int expires:int test_mode:Bool this_dc:int dc_options:Vector<DcOption> dc_txt_domain_name:string chat_size_max:int megagroup_size_max:int forwarded_count_max:int online_update_period_ms:int offline_blur_timeout_ms:int offline_idle_timeout_ms:int online_cloud_timeout_ms:int notify_cloud_delay_ms:int notify_default_delay_ms:int push_chat_period_ms:int push_chat_limit:int edit_time_limit:int revoke_time_limit:int revoke_pm_time_limit:int rating_e_decay:int stickers_recent_limit:int channels_read_media_period:int tmp_sessions:flags.0?int call_receive_timeout_ms:int call_ring_timeout_ms:int call_connect_timeout_ms:int call_packet_timeout_ms:int me_url_prefix:string autoupdate_url_prefix:flags.7?string gif_search_username:flags.9?string venue_search_username:flags.10?string img_search_username:flags.11?string static_maps_provider:flags.12?string caption_length_max:int message_length_max:int webfile_dc_id:int suggested_lang_code:flags.2?string lang_pack_version:flags.2?int base_lang_pack_version:flags.2?int reactions_default:flags.15?Reaction autologin_token:flags.16?string = Config;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **default_p2p_contacts** | [`flags.3?true`](type/true) | Whether the client should use P2P by default for phone calls with contacts |
| **preload_featured_stickers** | [`flags.4?true`](type/true) | Whether the client should preload featured stickers |
| **revoke_pm_inbox** | [`flags.6?true`](type/true) | Whether incoming private messages can be deleted for both participants |
| **blocked_mode** | [`flags.8?true`](type/true) | Indicates that telegram is probably censored by governments/ISPs in the current region |
| **force_try_ipv6** | [`flags.14?true`](type/true) | Whether to forcefully connect using IPv6 dcOptions, even if the client knows that IPv4 is available |
| <mark>date</mark> | [`int`](type/int) | Current date at the server |
| <mark>expires</mark> | [`int`](type/int) | Expiration date of this config: when it expires it'll have to be refetched using help.getConfig |
| <mark>test_mode</mark> | [`Bool`](type/Bool) | Whether we're connected to the test DCs |
| <mark>this_dc</mark> | [`int`](type/int) | ID of the DC that returned the reply |
| <mark>dc_options</mark> | [`Vector<DcOption>`](type/DcOption) | DC IP list |
| <mark>dc_txt_domain_name</mark> | [`string`](type/string) | Domain name for fetching encrypted DC list from DNS TXT record |
| <mark>chat_size_max</mark> | [`int`](type/int) | Maximum member count for normal groups |
| <mark>megagroup_size_max</mark> | [`int`](type/int) | Maximum member count for supergroups |
| <mark>forwarded_count_max</mark> | [`int`](type/int) | Maximum number of messages that can be forwarded at once using messages.forwardMessages |
| <mark>online_update_period_ms</mark> | [`int`](type/int) | The client should update its online status every N milliseconds |
| <mark>offline_blur_timeout_ms</mark> | [`int`](type/int) | Delay before offline status needs to be sent to the server |
| <mark>offline_idle_timeout_ms</mark> | [`int`](type/int) | Time without any user activity after which it should be treated offline |
| <mark>online_cloud_timeout_ms</mark> | [`int`](type/int) | If we are offline, but were online from some other client in last online_cloud_timeout_ms milliseconds after we had gone offline, then delay offline notification for notify_cloud_delay_ms milliseconds |
| <mark>notify_cloud_delay_ms</mark> | [`int`](type/int) | If we are offline, but online from some other client then delay sending the offline notification for notify_cloud_delay_ms milliseconds |
| <mark>notify_default_delay_ms</mark> | [`int`](type/int) | If some other client is online, then delay notification for notification_default_delay_ms milliseconds |
| <mark>push_chat_period_ms</mark> | [`int`](type/int) | Not for client use |
| <mark>push_chat_limit</mark> | [`int`](type/int) | Not for client use |
| <mark>edit_time_limit</mark> | [`int`](type/int) | Only messages with age smaller than the one specified can be edited |
| <mark>revoke_time_limit</mark> | [`int`](type/int) | Only channel/supergroup messages with age smaller than the specified can be deleted |
| <mark>revoke_pm_time_limit</mark> | [`int`](type/int) | Only private messages with age smaller than the specified can be deleted |
| <mark>rating_e_decay</mark> | [`int`](type/int) | Exponential decay rate for computing top peer rating |
| <mark>stickers_recent_limit</mark> | [`int`](type/int) | Maximum number of recent stickers |
| <mark>channels_read_media_period</mark> | [`int`](type/int) | Indicates that round videos (video notes) and voice messages sent in channels and older than the specified period must be marked as read |
| **tmp_sessions** | [`flags.0?int`](type/int) | Temporary passport sessions |
| <mark>call_receive_timeout_ms</mark> | [`int`](type/int) | Maximum allowed outgoing ring time in VoIP calls: if the user we're calling doesn't reply within the specified time (in milliseconds), we should hang up the call |
| <mark>call_ring_timeout_ms</mark> | [`int`](type/int) | Maximum allowed incoming ring time in VoIP calls: if the current user doesn't reply within the specified time (in milliseconds), the call will be automatically refused |
| <mark>call_connect_timeout_ms</mark> | [`int`](type/int) | VoIP connection timeout: if the instance of libtgvoip on the other side of the call doesn't connect to our instance of libtgvoip within the specified time (in milliseconds), the call must be aborted |
| <mark>call_packet_timeout_ms</mark> | [`int`](type/int) | If during a VoIP call a packet isn't received for the specified period of time, the call must be aborted |
| <mark>me_url_prefix</mark> | [`string`](type/string) | The domain to use to parse deep links » |
| **autoupdate_url_prefix** | [`flags.7?string`](type/string) | URL to use to auto-update the current app |
| **gif_search_username** | [`flags.9?string`](type/string) | Username of the bot to use to search for GIFs |
| **venue_search_username** | [`flags.10?string`](type/string) | Username of the bot to use to search for venues |
| **img_search_username** | [`flags.11?string`](type/string) | Username of the bot to use for image search |
| **static_maps_provider** | [`flags.12?string`](type/string) | ID of the map provider to use for venues |
| <mark>caption_length_max</mark> | [`int`](type/int) | Maximum length of caption (length in utf8 codepoints) |
| <mark>message_length_max</mark> | [`int`](type/int) | Maximum length of messages (length in utf8 codepoints) |
| <mark>webfile_dc_id</mark> | [`int`](type/int) | DC ID to use to download webfiles |
| **suggested_lang_code** | [`flags.2?string`](type/string) | Suggested language code |
| **lang_pack_version** | [`flags.2?int`](type/int) | Language pack version |
| **base_lang_pack_version** | [`flags.2?int`](type/int) | Basic language pack version |
| **reactions_default** | [`flags.15?Reaction`](type/Reaction) | Default message reaction |
| **autologin_token** | [`flags.16?string`](type/string) | Autologin token, click here for more info on URL authorization » |

---

## Type

[Config](type/Config)

---

## Example

```php
$config = $client->config(
	default_p2p_contacts : true,
	preload_featured_stickers : true,
	revoke_pm_inbox : true,
	blocked_mode : true,
	force_try_ipv6 : true,
	date : 22,
	expires : 39,
	test_mode : $client->boolFalse(),
	this_dc : 36,
	dc_options : array(
		$client->dcOption(
			ipv6 : true,
			media_only : true,
			tcpo_only : true,
			cdn : true,
			static : true,
			this_port_only : true,
			id : 90,
			ip_address : '127.0.0.1',
			port : 76,
			secret : '??h:WLiveProto믚?Q',
		),
	),
	dc_txt_domain_name : 'vM6yNUno5GzTEgjO',
	chat_size_max : 61,
	megagroup_size_max : 53,
	forwarded_count_max : 29,
	online_update_period_ms : 71,
	offline_blur_timeout_ms : 91,
	offline_idle_timeout_ms : 81,
	online_cloud_timeout_ms : 41,
	notify_cloud_delay_ms : 95,
	notify_default_delay_ms : 54,
	push_chat_period_ms : 44,
	push_chat_limit : 66,
	edit_time_limit : 13,
	revoke_time_limit : 97,
	revoke_pm_time_limit : 88,
	rating_e_decay : 83,
	stickers_recent_limit : 51,
	channels_read_media_period : 59,
	tmp_sessions : 55,
	call_receive_timeout_ms : 75,
	call_ring_timeout_ms : 100,
	call_connect_timeout_ms : 97,
	call_packet_timeout_ms : 33,
	me_url_prefix : 'https://docs.liveproto.dev',
	autoupdate_url_prefix : 'https://docs.liveproto.dev',
	gif_search_username : 'TakNone',
	venue_search_username : 'TakNone',
	img_search_username : 'TakNone',
	static_maps_provider : 'eIsXMZ6J1qN0iDf9',
	caption_length_max : 18,
	message_length_max : 1,
	webfile_dc_id : 64,
	suggested_lang_code : 'xeTM6fyOPzlJGLS8',
	lang_pack_version : 100,
	base_lang_pack_version : 93,
	reactions_default : $client->reactionEmpty(),
	autologin_token : 'FbTzuEtmNPV92qro',
);
```