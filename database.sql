INSERT INTO `modulos` (`nome`, `url`, `icone`, `status`, `ordem`, `tabela`, `cod_head`, `data_atualizacao`, `chave`, `acao`)
SELECT 'Background Video', 'background_video.php', 'icon-file-video-o', 1, 0, 'background_video', 'background_video/background_video.js', '2020-05-08', 'c8eed2de81022765dc7d4dfcf4d7c864', '{\r\n \"background\":[\"adicionar\",\"editar\",\"deletar\"]\r\n}';

-- CATEGORIA
CREATE TABLE IF NOT EXISTS `background_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `largura` text DEFAULT NULL,
  `altura` text DEFAULT NULL,
  `path` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;