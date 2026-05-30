# updates

**Description** : *Full constructor of updates*

**Layer** : 225

```tl
updates#74ae4240 updates:Vector<Update> users:Vector<User> chats:Vector<Chat> date:int seq:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in updates |
| <mark>date</mark> | [`int`](type/int) | Current date |
| <mark>seq</mark> | [`int`](type/int) | Total number of sent updates |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updates(
	updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 94,
				peer_id : $client->peerUser(
					user_id : 8001853359669281780,
				),
			),
			pts : 65,
			pts_count : 26,
		),
		$client->updateMessageID(
			id : 15,
			random_id : -6344579068001830968,
		),
		$client->updateDeleteMessages(
			messages : array(20),
			pts : 91,
			pts_count : 52,
		),
		$client->updateUserTyping(
			user_id : -3395905175975642168,
			top_msg_id : 83,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 4049099119520349862,
			from_id : $client->peerUser(
				user_id : 97246732153673156,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 3041548945605988043,
				self_participant : $client->chatParticipant(
					user_id : -8050083314508008754,
					inviter_id : 5049812269965536733,
					date : 92,
					rank : 'b6rxuOMNQDTEyVkw',
				),
			),
		),
		$client->updateUserStatus(
			user_id : 2448300345659263844,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -8021736430340442378,
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
			date : 10,
			device : 'uzjFVoC4wb3QBvy0',
			location : 'DksTO8W3eGbM4QYu',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 9128803180797645787,
				chat_id : 31,
				date : 38,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 33,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 8,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 55,
			),
			date : 12,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 48,
			max_date : 21,
			date : 99,
		),
		$client->updateChatParticipantAdd(
			chat_id : 1067822459293462357,
			user_id : -6610368856434773643,
			inviter_id : 1721138273102770959,
			date : 95,
			version : 14,
		),
		$client->updateChatParticipantDelete(
			chat_id : 775817878995475078,
			user_id : -5749717233318061977,
			version : 55,
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
					id : 20,
					ip_address : '127.0.0.1',
					port : 44,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : -4958569312052969400,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : false,
				mute_until : 61,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : false,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 20,
			type : 'lQHVCGOkB4SU3DL2',
			message : 'tIvhDEiBLwxGYXTl',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 64,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 82,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 20,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 90,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 20,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 18,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 11,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 8,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 0,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 56,
					language : 'JA69dRnTk0hjIQMl',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 0,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 54,
					user_id : 6171155015116381960,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 52,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 87,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 81,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 62,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 36,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 43,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 73,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 28,
					document_id : 5728122935479840540,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 19,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 74,
					date : 3,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 95,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 43,
					old_text : 'W4IDQSf7KXvYEJsU',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 35,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-8658883295704779623),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(8555408807360038565),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(5257981341410218205),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(2559417591893992557),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 2551743934633803269,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 71,
			peer : $client->peerUser(
				user_id : 3186955517721784909,
			),
			top_msg_id : 87,
			max_id : 70,
			still_unread_count : 88,
			pts : 25,
			pts_count : 43,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -8952504642494019529,
			),
			max_id : 81,
			pts : 72,
			pts_count : 28,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 1426713761437229495,
				url : 'https://docs.liveproto.dev',
			),
			pts : 19,
			pts_count : 26,
		),
		$client->updateReadMessagesContents(
			messages : array(91),
			pts : 89,
			pts_count : 59,
			date : 3,
		),
		$client->updateChannelTooLong(
			channel_id : 4539130077112912550,
			pts : 84,
		),
		$client->updateChannel(
			channel_id : 2533982807882522757,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 24,
				peer_id : $client->peerUser(
					user_id : -1958297117649026888,
				),
			),
			pts : 53,
			pts_count : 42,
		),
		$client->updateReadChannelInbox(
			folder_id : 95,
			channel_id : 8251204906353180215,
			max_id : 3,
			still_unread_count : 7,
			pts : 34,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 6877382010532929726,
			messages : array(88),
			pts : 68,
			pts_count : 51,
		),
		$client->updateChannelMessageViews(
			channel_id : 9037998129314891109,
			id : 40,
			views : 45,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 5401049357405228349,
			user_id : 1542012768631534446,
			is_admin : false,
			version : 79,
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
					installed_date : 53,
					id : -6369740706712651080,
					access_hash : 566185135880690810,
					title : '61CFgJeN2LzD4pjR',
					short_name : 'KtHTx0OAPpgEykF1',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 29,
					thumb_version : 81,
					thumb_document_id : 879918962422132862,
					count : 27,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'ZAB9aEsuqfpnKRGH',
						documents : array(7207406345288303589),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : 2353960396711223134,
						keyword : array('C17ptOZjI6wJgsHb'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : 4326567825652734301,
					),
					$client->document(
						id : 4891769114329549036,
						access_hash : -1849774182740942697,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 81,
						mime_type : 'v8o2MBgqh0KnJUNE',
						size : -2899155855585705494,
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
						dc_id : 92,
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
			order : array(-3593446241285931931),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -1489953470292189932,
			user_id : 3931477338045342626,
			query : 'u5tek6KH4MdCNWIz',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'UiFrC0KHQwf4Sbsu',
		),
		$client->updateBotInlineSend(
			user_id : 5839928645498913788,
			query : 'FM6WzySX7nOYDeBs',
			geo : $client->geoPointEmpty(),
			id : 'MuYB2kUOcvrRlV1Z',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 51,
				id : -3948330699265139839,
				access_hash : -2488517712127826198,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 80,
				peer_id : $client->peerUser(
					user_id : 8172687811962917222,
				),
			),
			pts : 67,
			pts_count : 38,
		),
		$client->updateBotCallbackQuery(
			query_id : 3729229074162987162,
			user_id : -1892375768457823267,
			peer : $client->peerUser(
				user_id : 2038686695415491314,
			),
			msg_id : 55,
			chat_instance : 1923644491004507775,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'Nv5kf8X4ro6MQT0E',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 47,
				peer_id : $client->peerUser(
					user_id : -6067375856340792771,
				),
			),
			pts : 29,
			pts_count : 42,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -2990152964460854747,
			user_id : 3413584955770290807,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 37,
				id : 3465542757810324050,
				access_hash : 8486389186612567386,
			),
			chat_instance : 442049421972826304,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : '8otJPslrWy1Ru4Nf',
		),
		$client->updateReadChannelOutbox(
			channel_id : 6642743968725461850,
			max_id : 65,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 4733074721722213508,
			),
			top_msg_id : 22,
			saved_peer_id : $client->peerUser(
				user_id : -436151071621917527,
			),
			draft : $client->draftMessageEmpty(
				date : 89,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -3981041212549703480,
			webpage : $client->webPageEmpty(
				id : 5094581068328409300,
				url : 'https://docs.liveproto.dev',
			),
			pts : 1,
			pts_count : 74,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 27,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 5978932636676619118,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 56,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 8203343956797286356,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 88,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : '82w41FWto67PNZcy',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 2025725267148240311,
			data : $client->dataJSON(
				data : 'yCiIB35lOfKq4A0a',
			),
			timeout : 65,
		),
		$client->updateBotShippingQuery(
			query_id : 7250596916687986787,
			user_id : -1106454751732052156,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'vHKjQWXOpyFABUJn',
				street_line2 : 'OTyofBqNGgJS0Ps5',
				city : 'wm6yQ7M3j8EigG9T',
				state : 'ZnHg6CStAQWawmbi',
				country_iso2 : 'zREsiLSONeUWg0Q4',
				post_code : 'fZtWsEGc5Jz8YNL0',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -5327119772840602950,
			user_id : 7337651579736022557,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'bKVvXhnpMQjItgcE',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'pTulE9LGihQ2xbXC',
					street_line2 : 'aLx78mI04Repzc6y',
					city : 'kLzPeTUs87FqNn5i',
					state : 'J1soTKlZYRQBgOaX',
					country_iso2 : '20pPwDyM9bNHujTz',
					post_code : 'Oxg90PBTEofUhNt4',
				),
			),
			shipping_option_id : 'Wz2wvhkKpRr85Fdu',
			currency : 'HknF2RMg4GqAUJxc',
			total_amount : 4249589442883493626,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -2199213118207976551,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'cHtEepTgdBNWP82G',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'gHCl1UmtqGBjbwpz',
				from_version : 68,
				version : 61,
				strings : array(
					$client->langPackString(
						key : 'XbhIz6veNkMsG8Bt',
						value : 'mviq19CN80wLZDkz',
					),
					$client->langPackStringPluralized(
						key : '3hxG4AoItUSrmHVR',
						zero_value : 'rfTFom6CJX7DUapI',
						one_value : '0qfCWTLZ5w1XJSc3',
						two_value : 'G8gXjFQAShTaWzED',
						few_value : 'cgaVW6PEd1B58meY',
						many_value : 'EdWoTIe8YBNCh3cv',
						other_value : 'CNmxl146HIFGcnqj',
					),
					$client->langPackStringDeleted(
						key : 'Ev01WAnF27LejmKD',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 7995000228451860425,
			top_msg_id : 92,
			saved_peer_id : $client->peerUser(
				user_id : -5742851137642792116,
			),
			messages : array(16),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -2720136045983385767,
			available_min_id : 33,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 5541594330980171778,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : -8327432304687580997,
			),
		),
		$client->updateMessagePoll(
			peer : $client->peerUser(
				user_id : -9142283447181942912,
			),
			msg_id : 25,
			top_msg_id : 99,
			poll_id : 7659776670917388665,
			poll : $client->poll(
				id : 6413065134449854890,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				open_answers : true,
				revoting_disabled : true,
				shuffle_answers : true,
				hide_results_until_close : true,
				creator : true,
				subscribers_only : true,
				question : $client->textWithEntities(
					text : 'uX3yhEsRK5l4gDzA',
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
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				answers : array(
					$client->pollAnswer(
						text : $client->textWithEntities(...),
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						media : $client->messageMediaEmpty(...),
						added_by : $client->peerUser(...),
						date : 30,
					),
					$client->inputPollAnswer(
						text : $client->textWithEntities(...),
						media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
					),
				),
				close_period : 81,
				close_date : 22,
				countries_iso2 : array('zKcX6I2CiUEfSnjO'),
				hash : 0,
			),
			results : $client->pollResults(
				min : true,
				has_unread_votes : true,
				can_view_stats : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 31,
						recent_voters : array(
							$client->peerUser(...),
							$client->peerChat(...),
							$client->peerChannel(...),
						),
					),
				),
				total_voters : 0,
				recent_voters : array(
					$client->peerUser(
						user_id : -2481084109903377121,
					),
					$client->peerChat(
						chat_id : -489959406649382514,
					),
					$client->peerChannel(
						channel_id : 6988908466059998425,
					),
				),
				solution : 'yYR4imSrnZ5TvMx3',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 4,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 100,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 86,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 55,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 99,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 51,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 18,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 71,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 58,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 58,
						language : 'hWK4JfTCyS7VZEnd',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 93,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 58,
						user_id : 4945756692050505733,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 5,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 77,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 90,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 73,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 77,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 16,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 16,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 8,
						document_id : -325524343719075562,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 22,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 27,
						date : 57,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 68,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 65,
						old_text : 'jrFR3AiOwI1H9xQu',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 7,
					),
				),
				solution_media : $client->messageMediaEmpty(),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : -7199052806511609675,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 68,
			),
			version : 87,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : -6816005360286315964,
					),
					folder_id : 6,
				),
			),
			pts : 58,
			pts_count : 86,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -1654237796393641718,
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
				geo_distance : 41,
				request_chat_title : 'STNQ4EMbC7w5tABe',
				request_chat_date : 78,
				business_bot_id : 4851995023668735027,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -2917092919338673536,
				registration_month : 'WzGHKUtsOCd9oV5i',
				phone_country : '+1234567890',
				name_change_date : 51,
				photo_change_date : 36,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : 6908074118596911975,
					),
					expires : 60,
					distance : 55,
				),
				$client->peerSelfLocated(
					expires : 5,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 76,
				peer_id : $client->peerUser(
					user_id : -5457402622158498177,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -9141068072693365776,
			),
			messages : array(95),
			sent_messages : array(44),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 3488590943937891329,
				access_hash : -2043521088121200787,
				slug : 'EC6shViNmrQDTP1Y',
				title : 'jFm6i0MSERclrytN',
				document : $client->documentEmpty(
					id : -8462943728417504295,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 10,
						outbox_accent_color : 0,
						message_colors : array(2),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : '0MkdrcnijK9BFCyo',
				installs_count : 79,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -7113848616007445226,
			),
			msg_id : 82,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -679862881281485137,
			peer : $client->peerUser(
				user_id : -4653983615164062026,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			positions : array(22),
			qts : 14,
		),
		$client->updateDialogFilter(
			id : 46,
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
					text : 'vLJod7cVYBqNrEsw',
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
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				emoticon : 'ziV5eykc4YCj0KNW',
				color : 24,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(58),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 5104119274229775864,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -200544870386693148,
			id : 0,
			forwards : 81,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : 5060953065097260401,
			top_msg_id : 79,
			read_max_id : 68,
			broadcast_id : -2777876232218821108,
			broadcast_post : 34,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 1453922708449758691,
			top_msg_id : 18,
			read_max_id : 88,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 850323980022202039,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -4641903214172427105,
			top_msg_id : 32,
			from_id : $client->peerUser(
				user_id : 3772529998629644405,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -2420717347688248264,
			),
			messages : array(58),
			pts : 97,
			pts_count : 5,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 5780517619486046373,
			messages : array(68),
			pts : 71,
			pts_count : 24,
		),
		$client->updateChat(
			chat_id : -2663986160316159124,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -7946511273497124972,
				access_hash : 5669475698620589165,
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
						user_id : -7308481835931706749,
					),
					date : 0,
					active_date : 23,
					source : 57,
					volume : 64,
					about : 'ACcvo8ju6ZnlGP7p',
					raise_hand_rating : -9009537726486132140,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'JwoaukPNdTh2A6Zz',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 2,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'KaLD6tumzZqAwhpX',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 94,
					),
					paid_stars_total : 4040114477227829291,
				),
			),
			version : 78,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : 4649057200984989696,
			),
			call : $client->groupCallDiscarded(
				id : -7479019381775204680,
				access_hash : -3338752312090329493,
				duration : 52,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -234711955980292452,
			),
			ttl_period : 95,
		),
		$client->updateChatParticipant(
			chat_id : -6124135519345349676,
			date : 41,
			actor_id : -3499210905420983739,
			user_id : -4482980424046182817,
			prev_participant : $client->chatParticipant(
				user_id : -7139404817273057881,
				inviter_id : 4653784519173256976,
				date : 80,
				rank : 'SiTIK3FWxJ5DyfB0',
			),
			new_participant : $client->chatParticipant(
				user_id : 6706759564763987421,
				inviter_id : -4803042802775908377,
				date : 12,
				rank : 'z7aWq6KpsxDo5gbU',
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'HCoyqTzsVAdpuNbQ',
				admin_id : 763941709068631670,
				date : 54,
				start_date : 13,
				expire_date : 97,
				usage_limit : 28,
				usage : 21,
				requested : 91,
				subscription_expired : 45,
				title : 'QK3mOCgd0G7fErAy',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 83,
					amount : 6787910712509472143,
				),
			),
			qts : 96,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 4135923146758160324,
			date : 6,
			actor_id : 4840332121352476670,
			user_id : -5339108361181044620,
			prev_participant : $client->channelParticipant(
				user_id : -6491009893954893713,
				date : 87,
				subscription_until_date : 19,
				rank : 'uWPKwBo4qhHzkiDF',
			),
			new_participant : $client->channelParticipant(
				user_id : 3159162329264725948,
				date : 79,
				subscription_until_date : 24,
				rank : 'CZTf9wtdazWJYoKU',
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : '4DUCZcgfjJzk73ly',
				admin_id : 1802974987426628840,
				date : 12,
				start_date : 71,
				expire_date : 65,
				usage_limit : 67,
				usage : 87,
				requested : 67,
				subscription_expired : 63,
				title : 'lwUEjiFC4KTyRMWB',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 90,
					amount : -1846230355513939229,
				),
			),
			qts : 15,
		),
		$client->updateBotStopped(
			user_id : 805472875136646886,
			date : 37,
			stopped : false,
			qts : 28,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'RvFhCmSPeKUaBu5w',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -5659835590460394087,
			),
			bot_id : 6022577818502882962,
			commands : array(
				$client->botCommand(
					command : 'iZGn5N1L4MRzj7Vp',
					description : 'LO316pod9bmAPDv0',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -4067203476416822990,
			),
			requests_pending : 14,
			recent_requesters : array(7803177991573069498),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : 6181593252703638657,
			),
			date : 61,
			user_id : -8869858005928283758,
			about : 'MKZfzErslvhdgwix',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'AyIueBRjqwDVUxcm',
				admin_id : 7837319237193138179,
				date : 51,
				start_date : 23,
				expire_date : 57,
				usage_limit : 24,
				usage : 41,
				requested : 9,
				subscription_expired : 83,
				title : 'L7vB42F8R0MQ1uh5',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 32,
					amount : -8041572729074026938,
				),
			),
			qts : 80,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -1529028373354388709,
			),
			msg_id : 79,
			top_msg_id : 80,
			saved_peer_id : $client->peerUser(
				user_id : 6195747471959436497,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 50,
						reaction : $client->reactionEmpty(...),
						count : 87,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 58,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 71,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : -5427161170289802098,
		),
		$client->updateBotMenuButton(
			bot_id : -1389940023464324807,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -6703144855475471743,
			),
			msg_id : 13,
			transcription_id : -216091761661733423,
			text : 'AZvk4aFwgQDcBI9s',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -7200017534112332930,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : 2705747843167159572,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 299815394694374458,
			),
			msg_id : 9,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 91,
					h : 6,
					thumb : $client->photoSizeEmpty(
						type : 'KY6bqRsNfztMn5Uv',
					),
					video_duration : 83,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : -5499621595421359552,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 187896653339522051,
			),
			story : $client->storyItemDeleted(
				id : 94,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -3640130022307126133,
			),
			max_id : 95,
		),
		$client->updateStoryID(
			id : 32,
			random_id : 3291782015032402826,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 56,
				cooldown_until_date : 1,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -3293218402803492437,
			),
			story_id : 82,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 4670141534638908946,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'KrjNROtZL1vJ4gGy',
				user_id : 6211436341067059251,
				giveaway_msg_id : 95,
				date : 52,
				expires : 31,
				used_gift_slug : 'KXRDTAyspd6NJzhx',
				multiplier : 55,
				stars : -6926732299371174331,
			),
			qts : 2,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -7659416017956634454,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 8489861382385564132,
			),
			wallpaper : $client->wallPaper(
				id : -5961583227601450865,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -5368875979489573422,
				slug : 'X1yKmlU7GeqHDoB0',
				document : $client->documentEmpty(
					id : -7986229861274794767,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 61,
					second_background_color : 70,
					third_background_color : 45,
					fourth_background_color : 7,
					intensity : 92,
					rotation : 71,
					emoticon : 'a7cbYNJtwEoAQfgO',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : -4420188329130721986,
			),
			msg_id : 28,
			date : 7,
			actor : $client->peerUser(
				user_id : -8616514573512267541,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : '92O5CUumWob34cky',
				),
				$client->reactionCustomEmoji(
					document_id : -6382529251168566701,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'I92CiFfD6Lc7BQg8',
				),
				$client->reactionCustomEmoji(
					document_id : 2624583134751804162,
				),
				$client->reactionPaid(),
			),
			qts : 56,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -1351685711234633239,
			),
			msg_id : 14,
			date : 35,
			reactions : array(
				$client->reactionCount(
					chosen_order : 72,
					reaction : $client->reactionEmpty(),
					count : 67,
				),
			),
			qts : 100,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 1469879745346088162,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -5724723190102023953,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 9,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : '25DftpToqYhaQe8y',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 72,
					shortcut : 'zxdGAmyEDYCoVLwb',
					top_message : 67,
					count : 15,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 82,
				shortcut : 'yX5tepsHrwGlYx01',
				top_message : 47,
				count : 34,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 2,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 58,
				peer_id : $client->peerUser(
					user_id : 8688029304585309420,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 62,
			messages : array(69),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'lS12XxCo38UD4P7b',
				user_id : 5229627709513765700,
				dc_id : 46,
				date : 31,
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
			qts : 75,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'isyTz480odrYDeuO',
			message : $client->messageEmpty(
				id : 70,
				peer_id : $client->peerUser(
					user_id : -7848203451183608392,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 71,
				peer_id : $client->peerUser(
					user_id : 6023579025558149035,
				),
			),
			qts : 83,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'AjeQdofGRZ2z13hN',
			message : $client->messageEmpty(
				id : 84,
				peer_id : $client->peerUser(
					user_id : 1222563247921115776,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 3,
				peer_id : $client->peerUser(
					user_id : -8506880889244623358,
				),
			),
			qts : 22,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'MYEJnSPlBxZLO4RN',
			peer : $client->peerUser(
				user_id : 4714995035629563359,
			),
			messages : array(14),
			qts : 29,
		),
		$client->updateNewStoryReaction(
			story_id : 8,
			peer : $client->peerUser(
				user_id : -634858621409736763,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -3726592788980448687,
				nanos : 33,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -1960084683744618488,
			user_id : 5504120190577790551,
			connection_id : 'TtaXYMD6vp87GV0y',
			message : $client->messageEmpty(
				id : 36,
				peer_id : $client->peerUser(
					user_id : -3255380115029916445,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 38,
				peer_id : $client->peerUser(
					user_id : 6267173836512000626,
				),
			),
			chat_instance : -1637211323750208638,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -3778707132258323960,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : -4814411062198912682,
					nanos : 88,
				),
				available_balance : $client->starsAmount(
					amount : -1436684067705323461,
					nanos : 70,
				),
				overall_revenue : $client->starsAmount(
					amount : -6876305074859235433,
					nanos : 82,
				),
				next_withdrawal_at : 68,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 1457105659473956535,
			payload : '9YE3TqmiQlB5ZurC',
			qts : 40,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 43,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 76,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -9166906018519784670,
				access_hash : -9169674519724008479,
			),
			sub_chain_id : 24,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 99,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -3291458082238544228,
			saved_peer_id : $client->peerUser(
				user_id : 4811468695299953854,
			),
			read_max_id : 54,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 6163288972899804614,
			saved_peer_id : $client->peerUser(
				user_id : -4360308139287903123,
			),
			read_max_id : 15,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 2983181893475577798,
			saved_peer_id : $client->peerUser(
				user_id : -4788411121224668804,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : -6234188347223600770,
				access_hash : 1271930629149086002,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 50,
				from_id : $client->peerUser(
					user_id : 5368642374620295923,
				),
				date : 95,
				message : $client->textWithEntities(
					text : 'rg1jM2iA4ovYp3VU',
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
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				paid_message_stars : -741233085145759360,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : -4409693887389095532,
				access_hash : -7298202679950711607,
			),
			from_id : $client->peerUser(
				user_id : -4164925080387754491,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : -955859500208569203,
			),
			topic_id : 1,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : 5671082578203658679,
			),
			order : array(96),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : -547454043392845700,
				access_hash : -7081704600433090534,
			),
			messages : array(8),
		),
		$client->updateStarGiftAuctionState(
			gift_id : 2065653682990879800,
			state : $client->starGiftAuctionStateNotModified(),
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : -1507866452830174794,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : 2762492001780375684,
				bid_date : 59,
				min_bid_amount : 5492327411139750823,
				bid_peer : $client->peerUser(
					user_id : 48291964060186018,
				),
				acquired_count : 54,
			),
		),
		$client->updateEmojiGameInfo(
			info : $client->messages->emojiGameUnavailable(),
		),
		$client->updateStarGiftCraftFail(),
		$client->updateChatParticipantRank(
			chat_id : 1686058900957198143,
			user_id : 1685174445807034274,
			rank : 'QqflRENv89gnzT0c',
			version : 64,
		),
		$client->updateManagedBot(
			user_id : 1788723862578510751,
			bot_id : 1080627650787899529,
			qts : 4,
		),
		$client->updateBotGuestChatQuery(
			query_id : -4174396228753063968,
			message : $client->messageEmpty(
				id : 15,
				peer_id : $client->peerUser(
					user_id : -951271090753892160,
				),
			),
			reference_messages : array(
				$client->messageEmpty(
					id : 95,
					peer_id : $client->peerUser(
						user_id : -497280421898841202,
					),
				),
				$client->message(
					out : true,
					mentioned : true,
					media_unread : true,
					silent : true,
					post : true,
					from_scheduled : true,
					legacy : true,
					edit_hide : true,
					pinned : true,
					noforwards : true,
					invert_media : true,
					offline : true,
					video_processing_pending : true,
					paid_suggested_post_stars : true,
					paid_suggested_post_ton : true,
					id : 67,
					from_id : $client->peerUser(
						user_id : -5129233813667947456,
					),
					from_boosts_applied : 81,
					from_rank : 'gdiweTcpKoD0k8WR',
					peer_id : $client->peerUser(
						user_id : 2672567667822979280,
					),
					saved_peer_id : $client->peerUser(
						user_id : -2955666387217926671,
					),
					fwd_from : $client->messageFwdHeader(
						imported : true,
						saved_out : true,
						from_id : $client->peerUser(...),
						from_name : 'Vf3jlLpsWTCP9KSZ',
						date : 86,
						channel_post : 61,
						post_author : 'UvGuZzmR7pjqQnNL',
						saved_from_peer : $client->peerUser(...),
						saved_from_msg_id : 97,
						saved_from_id : $client->peerUser(...),
						saved_from_name : 'aTbOyWAgX0nzlfDt',
						saved_date : 86,
						psa_type : 'JZ7w6pKuM09Ivhrl',
					),
					via_bot_id : -3038245712111192663,
					via_business_bot_id : 306637159627340218,
					guestchat_via_from : $client->peerUser(
						user_id : -5232393751927674126,
					),
					reply_to : $client->messageReplyHeader(
						reply_to_scheduled : true,
						forum_topic : true,
						quote : true,
						reply_to_msg_id : 30,
						reply_to_peer_id : $client->peerUser(...),
						reply_from : $client->messageFwdHeader(...),
						reply_media : $client->messageMediaEmpty(...),
						reply_to_top_id : 99,
						quote_text : 'OG7BZNXhokU0SiMw',
						quote_entities : array(
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
							$client->messageEntityFormattedDate(...),
							$client->messageEntityDiffInsert(...),
							$client->messageEntityDiffReplace(...),
							$client->messageEntityDiffDelete(...),
						),
						quote_offset : 64,
						todo_item_id : 50,
						poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					date : 51,
					message : 'WiRsJzAeBxrUG729',
					media : $client->messageMediaEmpty(),
					reply_markup : $client->replyKeyboardHide(
						selective : true,
					),
					entities : array(
						$client->messageEntityUnknown(
							offset : 0,
							length : 23,
						),
						$client->messageEntityMention(
							offset : 0,
							length : 67,
						),
						$client->messageEntityHashtag(
							offset : 0,
							length : 44,
						),
						$client->messageEntityBotCommand(
							offset : 0,
							length : 64,
						),
						$client->messageEntityUrl(
							offset : 0,
							length : 81,
						),
						$client->messageEntityEmail(
							offset : 0,
							length : 63,
						),
						$client->messageEntityBold(
							offset : 0,
							length : 34,
						),
						$client->messageEntityItalic(
							offset : 0,
							length : 16,
						),
						$client->messageEntityCode(
							offset : 0,
							length : 12,
						),
						$client->messageEntityPre(
							offset : 0,
							length : 91,
							language : 'Zt5yTIHzJMcAow9i',
						),
						$client->messageEntityTextUrl(
							offset : 0,
							length : 89,
							url : 'https://docs.liveproto.dev',
						),
						$client->messageEntityMentionName(
							offset : 0,
							length : 50,
							user_id : 791685932159437022,
						),
						$client->inputMessageEntityMentionName(
							offset : 0,
							length : 66,
							user_id : $client->get_input_user(user : '@TakNone'),
						),
						$client->messageEntityPhone(
							offset : 0,
							length : 51,
						),
						$client->messageEntityCashtag(
							offset : 0,
							length : 42,
						),
						$client->messageEntityUnderline(
							offset : 0,
							length : 47,
						),
						$client->messageEntityStrike(
							offset : 0,
							length : 5,
						),
						$client->messageEntityBankCard(
							offset : 0,
							length : 66,
						),
						$client->messageEntitySpoiler(
							offset : 0,
							length : 70,
						),
						$client->messageEntityCustomEmoji(
							offset : 0,
							length : 54,
							document_id : 763498140322812286,
						),
						$client->messageEntityBlockquote(
							collapsed : true,
							offset : 0,
							length : 1,
						),
						$client->messageEntityFormattedDate(
							relative : true,
							short_time : true,
							long_time : true,
							short_date : true,
							long_date : true,
							day_of_week : true,
							offset : 0,
							length : 30,
							date : 96,
						),
						$client->messageEntityDiffInsert(
							offset : 0,
							length : 44,
						),
						$client->messageEntityDiffReplace(
							offset : 0,
							length : 77,
							old_text : '3ad5BuX7mhp9AR1n',
						),
						$client->messageEntityDiffDelete(
							offset : 0,
							length : 58,
						),
					),
					views : 51,
					forwards : 91,
					replies : $client->messageReplies(
						comments : true,
						replies : 63,
						replies_pts : 49,
						recent_repliers : array(
							$client->peerUser(...),
							$client->peerChat(...),
							$client->peerChannel(...),
						),
						channel_id : 6078298215850660789,
						max_id : 25,
						read_max_id : 84,
					),
					edit_date : 33,
					post_author : 'jfJ92umLyCV1F4nE',
					grouped_id : -2815940599102737029,
					reactions : $client->messageReactions(
						min : true,
						can_see_list : true,
						reactions_as_tags : true,
						results : array(
							$client->reactionCount(...),
						),
						recent_reactions : array(
							$client->messagePeerReaction(...),
						),
						top_reactors : array(
							$client->messageReactor(...),
						),
					),
					restriction_reason : array(
						$client->restrictionReason(
							platform : 'wjcfWldqktgPYROQ',
							reason : 'EcUvhD0gLrj6B7Mp',
							text : 'RboCT5QIcE7XDBqa',
						),
					),
					ttl_period : 36,
					quick_reply_shortcut_id : 62,
					effect : -3821018342466788122,
					factcheck : $client->factCheck(
						need_check : true,
						country : 'esQ1BgSoakD4ZzMO',
						text : $client->textWithEntities(...),
						hash : 0,
					),
					report_delivery_until_date : 68,
					paid_message_stars : 9087131106104046457,
					suggested_post : $client->suggestedPost(
						accepted : true,
						rejected : true,
						price : $client->starsAmount(...),
						schedule_date : 52,
					),
					schedule_repeat_period : 46,
					summary_from_language : 'vPt7YcwyBea0WDiz',
				),
				$client->messageService(
					out : true,
					mentioned : true,
					media_unread : true,
					reactions_are_possible : true,
					silent : true,
					post : true,
					legacy : true,
					id : 13,
					from_id : $client->peerUser(
						user_id : 4237114228613097065,
					),
					peer_id : $client->peerUser(
						user_id : 5763841801529319566,
					),
					saved_peer_id : $client->peerUser(
						user_id : -8633250154193189410,
					),
					reply_to : $client->messageReplyHeader(
						reply_to_scheduled : true,
						forum_topic : true,
						quote : true,
						reply_to_msg_id : 49,
						reply_to_peer_id : $client->peerUser(...),
						reply_from : $client->messageFwdHeader(...),
						reply_media : $client->messageMediaEmpty(...),
						reply_to_top_id : 67,
						quote_text : 'm4EjcvqIfiaDF0kA',
						quote_entities : array(
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
							$client->messageEntityFormattedDate(...),
							$client->messageEntityDiffInsert(...),
							$client->messageEntityDiffReplace(...),
							$client->messageEntityDiffDelete(...),
						),
						quote_offset : 45,
						todo_item_id : 32,
						poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					date : 61,
					action : $client->messageActionEmpty(),
					reactions : $client->messageReactions(
						min : true,
						can_see_list : true,
						reactions_as_tags : true,
						results : array(
							$client->reactionCount(...),
						),
						recent_reactions : array(
							$client->messagePeerReaction(...),
						),
						top_reactors : array(
							$client->messageReactor(...),
						),
					),
					ttl_period : 16,
				),
			),
			qts : 61,
		),
		$client->updateAiComposeTones(),
	),
	users : array(
		$client->userEmpty(
			id : -2205628466837853877,
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
			bot_forum_can_manage_topics : true,
			bot_can_manage_bots : true,
			bot_guestchat : true,
			id : -882165591950566746,
			access_hash : 76292152645193930,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 61,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'LYpgWAGXvuesxQfi',
					reason : 'aVyTAXuIH0gf8NvC',
					text : 'vfcUshyGpVQwzCgR',
				),
			),
			bot_inline_placeholder : 'b0QsIaXm8Tc6Nz7D',
			lang_code : 'mCtIwGMa74ejObpU',
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
				max_id : 49,
			),
			color : $client->peerColor(
				color : 87,
				background_emoji_id : 8723431715163512855,
			),
			profile_color : $client->peerColor(
				color : 67,
				background_emoji_id : -6368653746976908107,
			),
			bot_active_users : 75,
			bot_verification_icon : -7399542573882050268,
			send_paid_messages_stars : 9110261192276519694,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 6762885362829344488,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 4780125321080504662,
			title : 'lAjqRVxFpQZYm76M',
			photo : $client->chatPhotoEmpty(),
			participants_count : 99,
			date : 23,
			version : 83,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 53,
			),
		),
		$client->chatForbidden(
			id : 8706867549174406495,
			title : 'r2qyJZ6mUWk7wKNs',
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
			id : -3841700539556787404,
			access_hash : -2191388745938115698,
			title : 'lODprIHAnTBGNWe7',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 87,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '8HJIjD793cyGe1Yd',
					reason : 'loWTmca7KFCPbdSu',
					text : 'SrA0qHOIcY25hpvj',
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 52,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 80,
			),
			participants_count : 47,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 98,
			),
			color : $client->peerColor(
				color : 15,
				background_emoji_id : -3309477265361358968,
			),
			profile_color : $client->peerColor(
				color : 86,
				background_emoji_id : 1008404949805254657,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 44,
			subscription_until_date : 86,
			bot_verification_icon : -3148380193337794284,
			send_paid_messages_stars : -6635347009217745329,
			linked_monoforum_id : 1977645206273781082,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -385633212439925638,
			access_hash : -2678119187852720016,
			title : 'cxqUlErHBLs0obF9',
			until_date : 79,
		),
	),
	date : 14,
	seq : 56,
);
```