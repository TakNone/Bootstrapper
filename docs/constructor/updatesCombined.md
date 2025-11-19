# updatesCombined

**Description** : *Constructor for a group of updates*

**Layer** : 218

```tl
updatesCombined#725b04c3 updates:Vector<Update> users:Vector<User> chats:Vector<Chat> date:int seq_start:int seq:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in updates |
| <mark>date</mark> | [`int`](type/int) | Current date |
| <mark>seq_start</mark> | [`int`](type/int) | Value seq for the earliest update in a group |
| <mark>seq</mark> | [`int`](type/int) | Value seq for the latest update in a group |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updatesCombined(
	updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 44,
				peer_id : $client->peerUser(
					user_id : -8083649239137175037,
				),
			),
			pts : 75,
			pts_count : 28,
		),
		$client->updateMessageID(
			id : 98,
			random_id : -2648846891690915973,
		),
		$client->updateDeleteMessages(
			messages : array(78),
			pts : 44,
			pts_count : 0,
		),
		$client->updateUserTyping(
			user_id : -2929651281002060529,
			top_msg_id : 75,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 7305468234869371756,
			from_id : $client->peerUser(
				user_id : -2870556920473887413,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 178566666534555748,
				self_participant : $client->chatParticipant(
					user_id : 2613714932687104378,
					inviter_id : -7917699267901415683,
					date : 6,
				),
			),
		),
		$client->updateUserStatus(
			user_id : -6695085073486920919,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 1848943471513794308,
			first_name : 'Tak',
			last_name : 'None',
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
		),
		$client->updateNewAuthorization(
			unconfirmed : true,
			hash : 0,
			date : 45,
			device : 'zGmJYZfRaBpWghwx',
			location : '7Z8tlwWQkLG4ngM5',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : -5140486479728450012,
				chat_id : 30,
				date : 21,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 23,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 74,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 12,
			),
			date : 28,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 68,
			max_date : 21,
			date : 78,
		),
		$client->updateChatParticipantAdd(
			chat_id : -5406651956560962625,
			user_id : 1053641545645497398,
			inviter_id : 1361200209216061184,
			date : 88,
			version : 31,
		),
		$client->updateChatParticipantDelete(
			chat_id : 7306270429225586064,
			user_id : 2444936646843495889,
			version : 78,
		),
		$client->updateDcOptions(
			dc_options : array(
				$client->dcOption(
					ipv6 : true,
					media_only : true,
					tcpo_only : true,
					cdn : true,
					static : true,
					this_port_only : true,
					id : 21,
					ip_address : '127.0.0.1',
					port : 44,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : 4978909244266460413,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : false,
				mute_until : 30,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : true,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 58,
			type : 'FZ0oiTRamlscyXnw',
			message : 'C19xPGchM8oiImQW',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 64,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 41,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 38,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 27,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 49,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 55,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 46,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 3,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 18,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 85,
					language : 'VYpLsnrFJO1CtMu9',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 49,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 59,
					user_id : -4035663297454052256,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 17,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 99,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 5,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 12,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 57,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 69,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 67,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 9,
					document_id : 4894654332080922235,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 51,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-9083833834213353676),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-607093016985932596),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-2436182083663988649),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-4973069916746793389),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -257622163017033080,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 70,
			peer : $client->peerUser(
				user_id : -660936887227582275,
			),
			top_msg_id : 81,
			max_id : 87,
			still_unread_count : 76,
			pts : 61,
			pts_count : 58,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -240317704383481720,
			),
			max_id : 90,
			pts : 57,
			pts_count : 13,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -4890602413092738071,
				url : 'https://docs.liveproto.dev',
			),
			pts : 56,
			pts_count : 72,
		),
		$client->updateReadMessagesContents(
			messages : array(96),
			pts : 75,
			pts_count : 67,
			date : 73,
		),
		$client->updateChannelTooLong(
			channel_id : -8217742913461225206,
			pts : 65,
		),
		$client->updateChannel(
			channel_id : -1733643212215984226,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 32,
				peer_id : $client->peerUser(
					user_id : 3044503228466307088,
				),
			),
			pts : 84,
			pts_count : 74,
		),
		$client->updateReadChannelInbox(
			folder_id : 89,
			channel_id : 1087683734764028940,
			max_id : 17,
			still_unread_count : 29,
			pts : 25,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -1203271777159283428,
			messages : array(72),
			pts : 46,
			pts_count : 100,
		),
		$client->updateChannelMessageViews(
			channel_id : -3946666889584197290,
			id : 20,
			views : 48,
		),
		$client->updateChatParticipantAdmin(
			chat_id : -6137413472752583426,
			user_id : -7353771920273039838,
			is_admin : true,
			version : 84,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(
					archived : true,
					official : true,
					masks : true,
					emojis : true,
					text_color : true,
					channel_emoji_status : true,
					creator : true,
					installed_date : 71,
					id : 1704037095538114187,
					access_hash : 8677374662328104048,
					title : 'I64WQJEOSgbpeLsl',
					short_name : '4BRseOar9vqoLQAE',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 18,
					thumb_version : 16,
					thumb_document_id : 7032145300667849900,
					count : 50,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'DO2pFtchI4Wfbls6',
						documents : array(-8076083979760292869),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : -5689527929967559155,
						keyword : array('mgEbVN25fcpxeaGv'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : -226265298851113442,
					),
					$client->document(
						id : 126887528935818298,
						access_hash : -4645921007826451926,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 59,
						mime_type : 'vOFfbg71auXTZ8Gz',
						size : -2873787436572181059,
						thumbs : array(
							$client->photoSizeEmpty(...),
							$client->photoSize(...),
							$client->photoCachedSize(...),
							$client->photoStrippedSize(...),
							$client->photoSizeProgressive(...),
							$client->photoPathSize(...),
						),
						video_thumbs : array(
							$client->videoSize(...),
							$client->videoSizeEmojiMarkup(...),
							$client->videoSizeStickerMarkup(...),
						),
						dc_id : 89,
						attributes : array(
							$client->documentAttributeImageSize(...),
							$client->documentAttributeAnimated(...),
							$client->documentAttributeSticker(...),
							$client->documentAttributeVideo(...),
							$client->documentAttributeAudio(...),
							$client->documentAttributeFilename(...),
							$client->documentAttributeHasStickers(...),
							$client->documentAttributeCustomEmoji(...),
						),
					),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(9160364116685776418),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 7803576135002681179,
			user_id : -4974360400858724462,
			query : 'xYQNLlrImSCzKsFX',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'sDUxkYA1WoNZtIdS',
		),
		$client->updateBotInlineSend(
			user_id : -8901984957932197327,
			query : 'PRMo9vkafp2bdi0U',
			geo : $client->geoPointEmpty(),
			id : 'KWT1xl4YqrR5sMvP',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 62,
				id : -4865794586708803858,
				access_hash : 5198513996402604088,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 11,
				peer_id : $client->peerUser(
					user_id : -2342698265614717051,
				),
			),
			pts : 84,
			pts_count : 45,
		),
		$client->updateBotCallbackQuery(
			query_id : -7517302008636753523,
			user_id : 2526120482458366964,
			peer : $client->peerUser(
				user_id : 4085414948180440899,
			),
			msg_id : 77,
			chat_instance : 8724931701125121727,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'UYd4QhZMCujEfm9i',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 83,
				peer_id : $client->peerUser(
					user_id : 9087235700574108703,
				),
			),
			pts : 54,
			pts_count : 64,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -77490520960214602,
			user_id : 2222603261779034303,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 99,
				id : -9124424128525921205,
				access_hash : -3656148250622702128,
			),
			chat_instance : -5854962350030799540,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'KloWMN1GCdc9aw0g',
		),
		$client->updateReadChannelOutbox(
			channel_id : -6826208975296866468,
			max_id : 38,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : -4685914503592575018,
			),
			top_msg_id : 42,
			saved_peer_id : $client->peerUser(
				user_id : -3491151429703855212,
			),
			draft : $client->draftMessageEmpty(
				date : 45,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 7214381974365918147,
			webpage : $client->webPageEmpty(
				id : 1048770254218606619,
				url : 'https://docs.liveproto.dev',
			),
			pts : 27,
			pts_count : 11,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 90,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -5637509171139436917,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 93,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -7952270216126892645,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 39,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'YS2TGuWbra1Hlmji',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 313049902611599718,
			data : $client->dataJSON(
				data : 'bDWpwQJaocisf8XA',
			),
			timeout : 64,
		),
		$client->updateBotShippingQuery(
			query_id : 4538950184779537835,
			user_id : 8174389119446240083,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'ik19wqb4rv7sdzfJ',
				street_line2 : '3JNU9rcdif7gy8O4',
				city : 'Ti5pJgPtQLwvjb0C',
				state : 'dLAHO2vrJ1bVlT7o',
				country_iso2 : 'AsCOJMZhlgKYFoyn',
				post_code : 'ZWvjcFyflb3YK1Mw',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 3334962179693447490,
			user_id : 4238037064997312444,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'jG0yvhrYCT3Ll7VN',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'Brp1bIDMJWqg4N7Z',
					street_line2 : 'S2TAzWXrevqLQY4E',
					city : 'wjC1VpJFZNvzlq0r',
					state : 'r5Gcxuhy3RHjFbat',
					country_iso2 : 'avzVlE1jgdJx36Ii',
					post_code : 'IB7tveFO0bsGVS9Z',
				),
			),
			shipping_option_id : 'DzMnkWvgA4Npa0sh',
			currency : 'QXJV0PGrvK6WZ7mL',
			total_amount : -6350113707971346048,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 5102538478120498455,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'JQaB94CXsbwVMU17',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'MugKQVDjJ5c3CXza',
				from_version : 90,
				version : 29,
				strings : array(
					$client->langPackString(
						key : 'FMYO7yelKzWo8Uk1',
						value : 'f6G7xpzX2QPiISrg',
					),
					$client->langPackStringPluralized(
						key : '5fSvZDg16WdOqM3K',
						zero_value : 'JXdm73CoFkVONMri',
						one_value : '1ik5bJGBZCxqa0ET',
						two_value : 'h7usMbclaNLkzRUv',
						few_value : '43tdirGPX02jAgDn',
						many_value : 'UjxSsRuGwITQ9kmr',
						other_value : 'Upn2xA8VwLaehrCl',
					),
					$client->langPackStringDeleted(
						key : '9YoI0rcNQHunTMJ8',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -348934903411871161,
			top_msg_id : 60,
			saved_peer_id : $client->peerUser(
				user_id : 5364037856855049273,
			),
			messages : array(84),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -8342366171027317735,
			available_min_id : 33,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 4047632584883611454,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : -4418872274084714495,
			),
		),
		$client->updateMessagePoll(
			poll_id : -2274742588904533566,
			poll : $client->poll(
				id : -707528745275690494,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : '7lZhSvAaeuF3ztMf',
					entities : array(
						$client->messageEntityUnknown(...),
						$client->messageEntityMention(...),
						$client->messageEntityHashtag(...),
						$client->messageEntityBotCommand(...),
						$client->messageEntityUrl(...),
						$client->messageEntityEmail(...),
						$client->messageEntityBold(...),
						$client->messageEntityItalic(...),
						$client->messageEntityCode(...),
						$client->messageEntityPre(...),
						$client->messageEntityTextUrl(...),
						$client->messageEntityMentionName(...),
						$client->inputMessageEntityMentionName(...),
						$client->messageEntityPhone(...),
						$client->messageEntityCashtag(...),
						$client->messageEntityUnderline(...),
						$client->messageEntityStrike(...),
						$client->messageEntityBankCard(...),
						$client->messageEntitySpoiler(...),
						$client->messageEntityCustomEmoji(...),
						$client->messageEntityBlockquote(...),
					),
				),
				answers : array(
					$client->pollAnswer(
						text : $client->textWithEntities(...),
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				close_period : 49,
				close_date : 3,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 49,
					),
				),
				total_voters : 74,
				recent_voters : array(
					$client->peerUser(
						user_id : -8115498576856872450,
					),
					$client->peerChat(
						chat_id : 1438213413857829353,
					),
					$client->peerChannel(
						channel_id : 2616075351566536794,
					),
				),
				solution : 'OuTIVCL9xJc4irdX',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 78,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 90,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 48,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 80,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 62,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 44,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 10,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 33,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 8,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 55,
						language : 'QwzD5RStx7KbOM8d',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 52,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 62,
						user_id : -5794030560089863024,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 71,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 41,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 50,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 76,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 66,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 88,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 69,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 40,
						document_id : -2433176879356145390,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 2,
					),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 3630370071947930032,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 17,
			),
			version : 18,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : -1137771236665863051,
					),
					folder_id : 30,
				),
			),
			pts : 15,
			pts_count : 33,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -4322697004093159237,
			),
			settings : $client->peerSettings(
				report_spam : true,
				add_contact : true,
				block_contact : true,
				share_contact : true,
				need_contacts_exception : true,
				report_geo : true,
				autoarchived : true,
				invite_members : true,
				request_chat_broadcast : true,
				business_bot_paused : true,
				business_bot_can_reply : true,
				geo_distance : 73,
				request_chat_title : 'N9D5jCv16wxtc4YQ',
				request_chat_date : 69,
				business_bot_id : -2435361311216175831,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : 6314230374227747210,
				registration_month : 'ctUk3njuHzIw2Qr9',
				phone_country : '+1234567890',
				name_change_date : 36,
				photo_change_date : 40,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : -3246737787893341726,
					),
					expires : 57,
					distance : 53,
				),
				$client->peerSelfLocated(
					expires : 24,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 41,
				peer_id : $client->peerUser(
					user_id : -2122316899949981279,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -6245750039706317193,
			),
			messages : array(66),
			sent_messages : array(61),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -7372469712296956108,
				access_hash : -6024336744925369386,
				slug : 'tHuk7lOpi29Qxce5',
				title : 'EPNopy05MQ6GnUIb',
				document : $client->documentEmpty(
					id : 9033073929780068917,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 43,
						outbox_accent_color : 99,
						message_colors : array(16),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : 'H8NAo4TP2VbxeIX6',
				installs_count : 17,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 714662960805415213,
			),
			msg_id : 5,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 439098332870086464,
			peer : $client->peerUser(
				user_id : 9060438254660280094,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 80,
		),
		$client->updateDialogFilter(
			id : 49,
			filter : $client->dialogFilter(
				contacts : true,
				non_contacts : true,
				groups : true,
				broadcasts : true,
				bots : true,
				exclude_muted : true,
				exclude_read : true,
				exclude_archived : true,
				title_noanimate : true,
				id : 1,
				title : $client->textWithEntities(
					text : 'OtBl8G1JrzIvMHgL',
					entities : array(
						$client->messageEntityUnknown(...),
						$client->messageEntityMention(...),
						$client->messageEntityHashtag(...),
						$client->messageEntityBotCommand(...),
						$client->messageEntityUrl(...),
						$client->messageEntityEmail(...),
						$client->messageEntityBold(...),
						$client->messageEntityItalic(...),
						$client->messageEntityCode(...),
						$client->messageEntityPre(...),
						$client->messageEntityTextUrl(...),
						$client->messageEntityMentionName(...),
						$client->inputMessageEntityMentionName(...),
						$client->messageEntityPhone(...),
						$client->messageEntityCashtag(...),
						$client->messageEntityUnderline(...),
						$client->messageEntityStrike(...),
						$client->messageEntityBankCard(...),
						$client->messageEntitySpoiler(...),
						$client->messageEntityCustomEmoji(...),
						$client->messageEntityBlockquote(...),
					),
				),
				emoticon : 'Q2kV9dwESqipYlIv',
				color : 97,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(99),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 2455352446260572996,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -123980656325430586,
			id : 18,
			forwards : 29,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : 7711566362331079158,
			top_msg_id : 3,
			read_max_id : 51,
			broadcast_id : 7221942920232452642,
			broadcast_post : 53,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 7928963561367909138,
			top_msg_id : 26,
			read_max_id : 30,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -5458501295413377022,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -4173393469894684161,
			top_msg_id : 75,
			from_id : $client->peerUser(
				user_id : 7177493841557866574,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -3406563368830670509,
			),
			messages : array(34),
			pts : 25,
			pts_count : 6,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -6093344962837337482,
			messages : array(89),
			pts : 80,
			pts_count : 36,
		),
		$client->updateChat(
			chat_id : -6142862448353156743,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -8277508720062728846,
				access_hash : 1264817662077129819,
			),
			participants : array(
				$client->groupCallParticipant(
					muted : true,
					left : true,
					can_self_unmute : true,
					just_joined : true,
					versioned : true,
					min : true,
					muted_by_you : true,
					volume_by_admin : true,
					self : true,
					video_joined : true,
					peer : $client->peerUser(
						user_id : 4025851510961121342,
					),
					date : 12,
					active_date : 54,
					source : 56,
					volume : 78,
					about : '58cdkz47wxZCuVWe',
					raise_hand_rating : 3473081718570582859,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'oQEKXLCaBMYlmFID',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 34,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : '5oXGSJhjY09eraQm',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 59,
					),
					paid_stars_total : 6131308098625565304,
				),
			),
			version : 65,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : -8998755793516283113,
			),
			call : $client->groupCallDiscarded(
				id : 885268953424844985,
				access_hash : -7288112422483037220,
				duration : 4,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 1292382414954201002,
			),
			ttl_period : 53,
		),
		$client->updateChatParticipant(
			chat_id : -3377543016535156836,
			date : 78,
			actor_id : -1859477627256313629,
			user_id : 4229457069879802932,
			prev_participant : $client->chatParticipant(
				user_id : -6051446524833642907,
				inviter_id : 3835679996530055292,
				date : 27,
			),
			new_participant : $client->chatParticipant(
				user_id : 7020185263435984136,
				inviter_id : 1489181588653331572,
				date : 94,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'lCaAK0fhe4TBJNZW',
				admin_id : 1854893332947843094,
				date : 66,
				start_date : 74,
				expire_date : 24,
				usage_limit : 76,
				usage : 87,
				requested : 80,
				subscription_expired : 95,
				title : 'kSWtFoJyBX8zirDc',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 44,
					amount : -5971689514889556773,
				),
			),
			qts : 75,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 6636688845354499014,
			date : 99,
			actor_id : -1420432778449941170,
			user_id : 5879019698235353502,
			prev_participant : $client->channelParticipant(
				user_id : 2685831991531634176,
				date : 73,
				subscription_until_date : 53,
			),
			new_participant : $client->channelParticipant(
				user_id : 5757495658932103526,
				date : 48,
				subscription_until_date : 84,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'NnbRsvFuHqEU8ZtV',
				admin_id : -5010252082959065896,
				date : 25,
				start_date : 82,
				expire_date : 79,
				usage_limit : 33,
				usage : 68,
				requested : 10,
				subscription_expired : 55,
				title : 'iqOB3aFZQ1SA4wzN',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 84,
					amount : -5583689108260159692,
				),
			),
			qts : 9,
		),
		$client->updateBotStopped(
			user_id : 2911944741549295339,
			date : 59,
			stopped : true,
			qts : 52,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'KXp5S1aOnoVfsRbJ',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 5256212345205978864,
			),
			bot_id : 2303543700603393052,
			commands : array(
				$client->botCommand(
					command : 'mK9SwJq2MFEALgGP',
					description : 'nEBH9M36dFLwsYTQ',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 654930620753613521,
			),
			requests_pending : 40,
			recent_requesters : array(510415800653208533),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -2131764607650578130,
			),
			date : 22,
			user_id : -6457503119586358582,
			about : 'Le872H1UQc5PYBGi',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'q3eatvLE24Gz9xFK',
				admin_id : 1290589019347111997,
				date : 68,
				start_date : 47,
				expire_date : 44,
				usage_limit : 84,
				usage : 30,
				requested : 60,
				subscription_expired : 95,
				title : 'XlFwhJyIOuZDEbn6',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 16,
					amount : 8388379202559995996,
				),
			),
			qts : 1,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 753943381646393006,
			),
			msg_id : 20,
			top_msg_id : 72,
			saved_peer_id : $client->peerUser(
				user_id : -2071729049063807267,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 68,
						reaction : $client->reactionEmpty(...),
						count : 50,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 41,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 49,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : 1044396479732551004,
		),
		$client->updateBotMenuButton(
			bot_id : 7266102901329346498,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : 7442163286528912637,
			),
			msg_id : 10,
			transcription_id : 7551085228487243367,
			text : 'dzXFIYu4lMDi0Ton',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : 128299347050765661,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : 6648386912703004538,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : -1396792759596310409,
			),
			msg_id : 67,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 98,
					h : 34,
					thumb : $client->photoSizeEmpty(
						type : 'W6jIbYk5FiBSLh98',
					),
					video_duration : 42,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : 2137163629774563888,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 3921416771554258287,
			),
			story : $client->storyItemDeleted(
				id : 47,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : 5751844199054630027,
			),
			max_id : 50,
		),
		$client->updateStoryID(
			id : 76,
			random_id : 7255448514400468535,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 59,
				cooldown_until_date : 83,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -3547087104037907631,
			),
			story_id : 98,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 7962396425191022973,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'FsofDCSl2A87nNYc',
				user_id : -434786073342201566,
				giveaway_msg_id : 70,
				date : 81,
				expires : 70,
				used_gift_slug : '9TkYvlW6P02Zfw17',
				multiplier : 57,
				stars : -2449919965779367455,
			),
			qts : 70,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -2640030620789912624,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -6584164359683500784,
			),
			wallpaper : $client->wallPaper(
				id : 4795482095722137693,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -9167581012784146984,
				slug : 'wB5zlo47JHuLMQA1',
				document : $client->documentEmpty(
					id : -4072550638115720997,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 59,
					second_background_color : 25,
					third_background_color : 33,
					fourth_background_color : 29,
					intensity : 55,
					rotation : 76,
					emoticon : 'nrOYhwVU1PZ49ilE',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 2799462960768436593,
			),
			msg_id : 48,
			date : 0,
			actor : $client->peerUser(
				user_id : -4134345299346240568,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : '9VS7WbkudNrRfApa',
				),
				$client->reactionCustomEmoji(
					document_id : -4552756141328067648,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'YuQaLf47hDUdsJgX',
				),
				$client->reactionCustomEmoji(
					document_id : -3322136848002182564,
				),
				$client->reactionPaid(),
			),
			qts : 42,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 7237733474335974755,
			),
			msg_id : 91,
			date : 85,
			reactions : array(
				$client->reactionCount(
					chosen_order : 63,
					reaction : $client->reactionEmpty(),
					count : 62,
				),
			),
			qts : 59,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -3350549703081821159,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -1090041938276647475,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 80,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'TbPlt9xZr6UvhJu2',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 58,
					shortcut : 'jm3EQSVU7su8yDwe',
					top_message : 18,
					count : 61,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 99,
				shortcut : 'LZ0MxOep8bzXgcFj',
				top_message : 40,
				count : 55,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 43,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 34,
				peer_id : $client->peerUser(
					user_id : -8484839828669021921,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 79,
			messages : array(95),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'ptKMZ47qLoOPi8Fm',
				user_id : 2255575217341462361,
				dc_id : 41,
				date : 30,
				rights : $client->businessBotRights(
					reply : true,
					read_messages : true,
					delete_sent_messages : true,
					delete_received_messages : true,
					edit_name : true,
					edit_bio : true,
					edit_profile_photo : true,
					edit_username : true,
					view_gifts : true,
					sell_gifts : true,
					change_gift_settings : true,
					transfer_and_upgrade_gifts : true,
					transfer_stars : true,
					manage_stories : true,
				),
			),
			qts : 31,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : '9HdjVWFE1PCehSpr',
			message : $client->messageEmpty(
				id : 55,
				peer_id : $client->peerUser(
					user_id : -36998217581845635,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 58,
				peer_id : $client->peerUser(
					user_id : -8661904718559280386,
				),
			),
			qts : 26,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : '9bkVfcmx7P0BvdWq',
			message : $client->messageEmpty(
				id : 20,
				peer_id : $client->peerUser(
					user_id : -8613845227405235218,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 16,
				peer_id : $client->peerUser(
					user_id : 8197883698013894085,
				),
			),
			qts : 41,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'UYnAsNMlzh79SyCg',
			peer : $client->peerUser(
				user_id : -6448160873306855773,
			),
			messages : array(63),
			qts : 43,
		),
		$client->updateNewStoryReaction(
			story_id : 62,
			peer : $client->peerUser(
				user_id : -5021819710500314706,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 7722457160996795041,
				nanos : 36,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 800274092250212778,
			user_id : 8502126818915349555,
			connection_id : 'RSGKoyfUrtEcxPCm',
			message : $client->messageEmpty(
				id : 87,
				peer_id : $client->peerUser(
					user_id : -3650725162865563848,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 53,
				peer_id : $client->peerUser(
					user_id : -8680222808635629586,
				),
			),
			chat_instance : -6008255240527139273,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -8270566211140329711,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : 9060529964387987031,
					nanos : 39,
				),
				available_balance : $client->starsAmount(
					amount : -8380740629274271933,
					nanos : 66,
				),
				overall_revenue : $client->starsAmount(
					amount : 8479777223295788270,
					nanos : 8,
				),
				next_withdrawal_at : 84,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 191821581500447127,
			payload : 'HU1kAZJMFDh0Sgmx',
			qts : 20,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 87,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 41,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 1775807719280900851,
				access_hash : -7420117548403269200,
			),
			sub_chain_id : 7,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 43,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -1075578262399306326,
			saved_peer_id : $client->peerUser(
				user_id : 8403358545240915261,
			),
			read_max_id : 39,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 2164221458409852563,
			saved_peer_id : $client->peerUser(
				user_id : 8750744360263374262,
			),
			read_max_id : 19,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 809359229287994749,
			saved_peer_id : $client->peerUser(
				user_id : 3698279169488149457,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : 725337244411759326,
				access_hash : -6634062085699060494,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 21,
				from_id : $client->peerUser(
					user_id : 8902153156591197301,
				),
				date : 25,
				message : $client->textWithEntities(
					text : 'hqKc8W1ueNHstFgU',
					entities : array(
						$client->messageEntityUnknown(...),
						$client->messageEntityMention(...),
						$client->messageEntityHashtag(...),
						$client->messageEntityBotCommand(...),
						$client->messageEntityUrl(...),
						$client->messageEntityEmail(...),
						$client->messageEntityBold(...),
						$client->messageEntityItalic(...),
						$client->messageEntityCode(...),
						$client->messageEntityPre(...),
						$client->messageEntityTextUrl(...),
						$client->messageEntityMentionName(...),
						$client->inputMessageEntityMentionName(...),
						$client->messageEntityPhone(...),
						$client->messageEntityCashtag(...),
						$client->messageEntityUnderline(...),
						$client->messageEntityStrike(...),
						$client->messageEntityBankCard(...),
						$client->messageEntitySpoiler(...),
						$client->messageEntityCustomEmoji(...),
						$client->messageEntityBlockquote(...),
					),
				),
				paid_message_stars : 7523174924715427975,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : 4772204117248033055,
				access_hash : -4457553764998539024,
			),
			from_id : $client->peerUser(
				user_id : -4683229344766894532,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : 6364247033350938204,
			),
			topic_id : 64,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : -7678167784187076852,
			),
			order : array(18),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : -3537248116416098448,
				access_hash : 734491685920345143,
			),
			messages : array(77),
		),
		$client->updateStarGiftAuctionState(
			gift_id : -196821903895532941,
			state : $client->starGiftAuctionState(
				version : 40,
				start_date : 27,
				end_date : 84,
				min_bid_amount : 7719471662085608042,
				bid_levels : array(
					$client->auctionBidLevel(
						pos : 100,
						amount : 4749934547745671122,
						date : 93,
					),
				),
				top_bidders : array(-8852375459455374296),
				next_round_at : 3,
				gifts_left : 7,
				current_round : 18,
				total_rounds : 20,
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : -8242150816811737390,
			text : 'OlGzjKVTg4d2MeH9',
		),
		$client->updateBotSubscriptionExpire(
			user_id : -8533926150818031786,
			payload : 'rnRLftjovMX38YOy',
			until_date : 49,
			qts : 0,
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : 1990169351747883397,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : 2684165127618066116,
				bid_date : 59,
				min_bid_amount : 5921640488610087379,
				peer : $client->peerUser(
					user_id : -5723773135989999924,
				),
				acquired_count : 23,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -5663688430267880922,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			id : -6749472524937226888,
			access_hash : 538941102666351183,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 10,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '7U1MEgY8nmjv3SrR',
					reason : 'hgrVCJ9DMsFAGdbn',
					text : 'O8mG7UvaD2jHcbJh',
				),
			),
			bot_inline_placeholder : 'aD6TUd5R2fEeHYMx',
			lang_code : 'vbw9CzfHX5ZAqRPS',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 36,
			),
			color : $client->peerColor(
				color : 46,
				background_emoji_id : -7918854899046666347,
			),
			profile_color : $client->peerColor(
				color : 32,
				background_emoji_id : 6581650331277212281,
			),
			bot_active_users : 24,
			bot_verification_icon : 1844664952399973338,
			send_paid_messages_stars : -188768829132716797,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 2561207090061024391,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 5485800887503097707,
			title : 'MzF6Qq2D5N8BPZ1u',
			photo : $client->chatPhotoEmpty(),
			participants_count : 30,
			date : 28,
			version : 18,
			migrated_to : $client->get_input_channel(peer : '@LiveProto'),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 90,
			),
		),
		$client->chatForbidden(
			id : 1357714951628486041,
			title : 'gVoHMAK3INmFcRLd',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : 1174866012873553933,
			access_hash : -5269758256569525312,
			title : '46uvtrOAnHRMYaUl',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 93,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6K4AEtYlTvBnHUuF',
					reason : 'E2Oh9pv5iHMos3yV',
					text : 'I2BnNkeJhDlXGs6y',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 32,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 77,
			),
			participants_count : 19,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 84,
			),
			color : $client->peerColor(
				color : 15,
				background_emoji_id : -6762984610010146470,
			),
			profile_color : $client->peerColor(
				color : 18,
				background_emoji_id : -1449451632881933391,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 75,
			subscription_until_date : 47,
			bot_verification_icon : -1449279262816726520,
			send_paid_messages_stars : 5979168497835128792,
			linked_monoforum_id : -420099137699121188,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 7744149245485087628,
			access_hash : -699843323826668079,
			title : 'L483zteJsxUlAvhu',
			until_date : 29,
		),
	),
	date : 94,
	seq_start : 31,
	seq : 9,
);
```